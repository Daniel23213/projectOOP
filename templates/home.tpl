{extends file="templates/layout.tpl"}

{block name="signup"}
    <div class="container">
        <header>
            <h1>Welcome to Your Task Manager</h1>
        </header>

        <main>
            <div class="welcome-message">
                Hello, {$name}!
            </div>

            <div class="login-container">
                <a href="login.php" class="btn-login">Sign In</a>
            </div>
            <div class="login-container">
                <a href="index.php?action=signupForm" class="btn-login">Sign Up</a>
            </div>
        </main>
    </div>
{/block}
