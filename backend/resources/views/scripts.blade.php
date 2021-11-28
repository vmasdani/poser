<script x-data="{ lumen: {{ $data }} }">
    document.addEventListener('alpine:init', () => {
        Alpine.store('state', {
            hello: 'world!',
            password: '',
            apiKey: localStorage.getItem ("apiKey") ?? null,
            showSidebar: true
        })
    });

    const handleLogin = async (e, state, store) => {

        try {
            e?.preventDefault()

            const resp = await fetch(`${state?.lumen?.baseUrl}/api/v1/admin-login`, {
                method: 'post',
                headers: {
                    'content-type': 'application/json',
                },
                body: JSON.stringify({
                    password: store?.state?.password ?? ''
                })
            })

            if (resp.status !== 200) throw await resp.text()

            alert('Login success!')
            const apiKey = await resp.text()
            localStorage.setItem('apiKey', apiKey)
            store.state.apiKey = apiKey
        } catch (e) {
            alert(`${e}`)
        } finally {

        }
    }
</script>