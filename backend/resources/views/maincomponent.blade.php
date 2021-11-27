<!DOCTYPE html>

@include('head')

<body x-data="{
    state: {
        hello: 'world!',
        password: '',
        apiKey: null,
        lumen: {{ $data }}
    }
}" x-init="() => {
        state.apiKey = localStorage.getItem('apiKey') ?? null
    }">

    <!-- <div x-text="state.apiKey"></div> -->

    <template x-if="state.apiKey">
        @include('dashboard')
    </template>

    <template x-if="!state.apiKey">
        @include('login')
    </template>

    <script>
        const handleLogin = async (e, state) => {
            try {
                e?.preventDefault()
                const resp = await fetch(`${state?.lumen?.baseUrl}/api/v1/admin-login`, {
                    method: 'post',
                    headers: {
                        'content-type': 'application/json',
                    },
                    body: JSON.stringify({
                        password: state?.password ?? ''
                    })
                })

                if (resp.status !== 200) throw await resp.text()

                alert('Login success!')
                const apiKey = await resp.text()
                localStorage.setItem('apiKey', apiKey)
                state.apiKey = apiKey
            } catch (e) {
                alert(`${e}`)
            } finally {

            }
        }
    </script>
</body>