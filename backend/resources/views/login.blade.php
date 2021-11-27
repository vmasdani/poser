<div>
    <form>
        <div>
            <h4>Admin page</h4>
            <div x-text="state"></div>
            <input @change="(e) => {
                state.password = e.target.value
            }" placeholder="Passphrase..." type="password" />
            <button @click="(e) => { 
                handleLogin(e, state) 
            }">Login</button>
        </div>
        <div x-text="state?.hello ?? null"></div>
    </form>


</div>