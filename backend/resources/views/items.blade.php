<!DOCTYPE html>

@include('head')

<body x-data="{
    state: { 
        lumen: {{ $data }},
        searchItem: '',
        item: {}
    }
}">
    <template x-if="$store.state.apiKey">
        <div class="d-flex">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- <div x-text="JSON.stringify(state?.item)"></div> -->
                            <label>Item Name</label>
                            <div>
                                <input class="form-control form-control-sm" placeholder="Item name..." :value="state.item?.name" />
                            </div>
                            <label>Item Description</label>
                            <div>
                                <input class="form-control form-control-sm" placeholder="Item desc..." :value="state.item?.description" />
                            </div>


                            <template x-if="state.item?.id">
                                <div>
                                    <hr />

                                    <div class="d-flex">
                                        <div>Prices history:</div>
                                        <div class="mx-2">
                                            <button class="btn btn-sm btn-primary" @click="() => {
                                                state?.item?.item_prices?.push({
                                                    price: 0,
                                                    created_at: new Date().toISOString()
                                                })
                                            }">Add</button>
                                        </div>
                                    </div>
                                    <ol>
                                        <template x-for="(p, i) in (state?.item?.item_prices ?? [])">
                                            <li>
                                                <template x-if="p?.id">
                                                    <strong x-text="p?.price !== null && p?.price !== undefined ? Intl.NumberFormat(navigator.language ?? 'en-US').format(p?.price ?? 0) : 'None'"></strong>

                                                </template>

                                                <template x-if="!(p?.id)">
                                                    <input class="form-control form-control-sm" style="width:100px" x-on:blur="e => {
                                                        if (!isNaN(parseFloat(e.target.value))) {
                                                            state.item.item_prices.map((px, ix) => {
                                                                if (ix === i) {
                                                                    px.price = parseFloat(e.target.value)
                                                                }
                                                            })
                                                        }
                                                    }" />
                                                </template>

                                                <div x-text="p?.created_at 
                                                ? Intl.DateTimeFormat(navigator.language ?? 'en-US', { dateStyle: 'medium', timeStyle: 'long', hourCycle: 'h23' }).format(new Date (p.created_at)) 
                                                : 'None'"></div>
                                                <!-- <div x-text="JSON.stringify(p?.price)"></div> -->
                                                <hr />
                                            </li>

                                        </template>
                                    </ol>

                                </div>
                            </template>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @include('sidebar')
            </div>
            <div class="container my-3">

                <div>
                    @include('topbar')
                </div>
                <h5>Items page</h5>
                <div class="my-2">
                    <hr class="border border-primary" />
                </div>
                <div class="d-flex my-3">
                    <div>
                        <button @click="() => {
                            state.item = {}
                        }" class="btn btn-sm btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add
                        </button>
                    </div>
                    <div class="flex-grow-1">
                        <input class="form-control form-control-sm" placeholder="Search item..." x-on:blur="e => {
                                state.searchItem = e.target.value
                            }" />
                    </div>
                </div>
                <div class="border border-dark shadow shadow-md overflow-auto" style="resize:vertical;height:75vh">
                    <table class="table table-sm table-all table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <template x-for="h in [
                                    `#`, `Name`, `Description`, `Last price`, `Last updated price`, `Created`, `Updated`, `Actions`
                                ]">
                                    <th class="sticky-top bg-dark text-light" x-text="h"></th>
                                </template>
                            </tr>

                        </thead>
                        <tbody>
                            <!-- <div x-text="JSON.stringify(state.lumen)"></div> -->
                            <template x-for="(i, i_) in 
                                    state.lumen.items
                                        .filter(ix => 
                                            ix?.name?.toLowerCase()?.includes(state?.searchItem?.toLowerCase() ?? '')
                                       )
                                ">
                                <tr>
                                    <td x-text="i_ + 1"></td>
                                    <td x-text="i?.name"></td>
                                    <td x-text="i?.description"></td>
                                    <td x-text="
                                        i?.item_prices?.length > 0 
                                            ? (i?.item_prices[i?.item_prices?.length - 1 ?? 0]?.price ?? 'none') 
                                            : 0
                                    "></td>
                                    <td x-text="Intl.DateTimeFormat(navigator.language ?? 'en-US', {dateStyle: 'medium', timeStyle: 'short', hourCycle: 'h23' }).format(new Date(i?.created_at))"></td>
                                    <td x-text="Intl.DateTimeFormat(navigator.language ?? 'en-US', {dateStyle: 'medium', timeStyle: 'short', hourCycle: 'h23' }).format(new Date(i?.created_at))"></td>
                                    <td x-text="Intl.DateTimeFormat(navigator.language ?? 'en-US', {dateStyle: 'medium', timeStyle: 'short', hourCycle: 'h23' }).format(new Date(i?.updated_at))"></td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="() => {
                                                state.item = i
                        }">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </td>
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