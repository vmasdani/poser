<!DOCTYPE html>

@include('head')

<body x-data="{
    state: {
        hello: 'world!',
        password: '',
        apiKey: null,
        lumen: {{ $data }},
        showSidebar: true
    }
}" x-init="() => {
        state.apiKey = localStorage.getItem('apiKey') ?? null
    }">
    <template x-if="state.apiKey">
        @include('dashboard')
    </template>

    <template x-if="!state.apiKey">
        @include('login')
    </template>

    @include('scripts')
</body>