{extends file="templates/layout.tpl"}

{block name="content"}
    <div class="container">
        <header>
            <h1>Welcome to Your Task Manager</h1>
        </header>

        <main>
            <div class="welcome-message">
                {if $username}
                    <h1>Welcome, {$username}!</h1>
                {else}
                    <h1>Welcome to our website!</h1>
                {/if}
            </div>

            <div class="login-container">
                <a href="index.php?action=loginForm" class="btn-login">Sign In</a>
            </div>
            <div class="login-container">
                <a href="index.php?action=signupForm" class="btn-login">Sign Up</a>
            </div>
        </main>
    </div>
{/block}
