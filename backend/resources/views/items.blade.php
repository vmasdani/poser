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

    <template x-if="state.apiKey">
        <div class="d-flex">
            <div>
                @include('sidebar')
            </div>
            <div class="p-3">
                <h5>Items page</h5>
            </div>
        </div>

    </template>

    <template x-if="!state.apiKey">
        @include('login')
    </template>

    @include('scripts')
</body>