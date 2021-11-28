<!DOCTYPE html>

@include('head')

<body x-data="{state: { lumen: {{ $data }} } }">
    <template x-if="$store.state.apiKey">
        <div class="d-flex">
            <div>
                @include('sidebar')
            </div>
            <div class="container my-3">
                <div>
                    @include('topbar')
                </div>
                <h5>Items page</h5>
                <div class="overflow-auto" style="resize">
                    <table class="table table-sm table-all table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <template x-for="h in [`#`, `Name`, `Description`, `Last price`, `Last updated price`, `Created`, `Updated`]">
                                    <th x-text="h"></th>
                                </template>
                            </tr>

                        </thead>
                        <tbody>
                            <!-- <div x-text="JSON.stringify(state.lumen)"></div> -->
                            <template x-for="(i, i_) in state.lumen.items">
                                <tr>
                                    <td x-text="i_ + 1"></td>
                                    <td x-text="i?.name"></td>
                                    <td x-text="i?.description"></td>
                                    <td x-text=""></td>
                                    <td x-text=""></td>

                                    <td x-text="Intl.DateTimeFormat(navigator.language ?? 'en-US', {dateStyle: 'medium', timeStyle: 'short', hourCycle: 'h23' }).format(new Date(i?.created_at))"></td>
                                    <td x-text="Intl.DateTimeFormat(navigator.language ?? 'en-US', {dateStyle: 'medium', timeStyle: 'short', hourCycle: 'h23' }).format(new Date(i?.updated_at))"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </template>

    <template x-if="!$store.state.apiKey">
        @include('login')
    </template>

    @include('scripts')
</body>