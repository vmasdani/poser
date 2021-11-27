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

    @include('scripts')

</body>