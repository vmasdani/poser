<div :class="`vh-100 overflow-auto ${$store.state?.showSidebar ? 'd-block' : 'd-none' } border border-secondary bg-light`" style="width: 25vw;resize:horizontal">
    <div class="sticky-top text-white fw-bold bg-dark p-2">
        Admin
    </div>
    <a href="/" class="text-decoration-none">
        <div class="text-decoration-none text-dark p-2 fw-bold" style="cursor:pointer">
            Dashboard
        </div>
    </a>

    <a href="/items" class="text-decoration-none">
        <div class="text-decoration-none text-dark p-2 fw-bold" style="cursor:pointer">
            Items
        </div>
    </a>

    <a href="/customers" class="text-decoration-none">
        <div class="text-decoration-none text-dark p-2 fw-bold" style="cursor:pointer">
            Customers
        </div>
    </a>

    <a href="/kiosks" class="text-decoration-none">
        <div class="text-decoration-none text-dark p-2 fw-bold" style="cursor:pointer">
            Kiosks
        </div>
    </a>

    <a href="/users" class="text-decoration-none">
        <div class="text-decoration-none text-dark p-2 fw-bold" style="cursor:pointer">
            Users
        </div>
    </a>

    <a href="/statistics" class="text-decoration-none">
        <div class="text-decoration-none text-dark p-2 fw-bold" style="cursor:pointer">
            Statistics
        </div>
    </a>



    <!-- <template x-for="i in [...Array(50)].map((_, i) => i + 1)">
        <div class="px-2" x-text="`sidebar item ${i}`"></div>
    </template> -->
</div>