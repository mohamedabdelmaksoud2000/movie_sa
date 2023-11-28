<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
                <div class="row">
                    <label for="username">
                        email:
                        <input type="email" name="email" id="username" placeholder="insert email" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******" required="required" />
                    </label>
                </div>
                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                        </div>
                        <a href="{ route('password.request') }}">Forget password ?</a>
                    </div>
                </div>
                <div class="row">
                    <button type="submit">Login</button>
                </div>
        </div>
    </form>
</div>
<!--end of login form popup-->