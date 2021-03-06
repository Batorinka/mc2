<?php $this->layout('layout', ['title' => 'Registration']) ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <h1 class="text-center login-title">Sign in</h1>
                <form class="form-signin" action="/login" method="post">
                <input type="text" class="form-control" placeholder="Email" required autofocus name="email">
                <input type="password" class="form-control" placeholder="Password" required name="password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
                <a href="#" class="text-center new-account">Create an account </a>
            </div>
        </div>
    </div>
</div>