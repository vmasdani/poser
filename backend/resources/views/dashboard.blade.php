<div class="d-flex">
    <div>
        @include('sidebar')
    </div>
    <div class="flex-grow-1 vh-100 overflow-auto">
        <div><button>Menu</button></div>

        Logged in.
        <button @click="() => {
                state.apiKey = null
                localStorage.removeItem('apiKey')
            }">Logout</button>

        <div class="p-3">
            <template x-for="i in [...Array(100)]">
                <div class="my-2">Lorem Ipsum</div>
            </template>
        </div>
    </div>

</div>