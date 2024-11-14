
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Website</title>
    <link rel="stylesheet" href="templates/style.css">

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
    <main>
        {block name="signup"}{/block}
        {block name="content"}{/block}
        {block name="contact"}{/block}
    </main>

</head>
