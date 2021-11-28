<div>
    <form>
        <div class="d-flex align-items-center justify-content-center flex-column vh-100 ">
            <div class="d-flex align-items-center flex-column justify-content-center p-3 shadow shadow-md">
                <h4 class="my-3">Admin page</h4>
                <input class="form-control w-100" @change="(e) => {
                $store.state.password = e.target.value
            }" placeholder="Passphrase..." type="password" />
                <button class="btn btn-sm btn-primary my-3" @click="(e) => { 
                handleLogin(e, state, $store) 
            }">Login</button>
            </div>
        </div>
    </form>
</div>