{extends file="templates/layout.tpl"}
{block name ="content"}

<div class="container">
    <header>
        <h1>Welcome to Your Task Manager</h1>
    </header>

    <main>
        <div class="welcome-message">
            Hello,
        </div>

        <div class="login-container">
            <a href="login.php" class="btn-login">Sign In</a>
        </div>
    </main>
</div>

{/block}

