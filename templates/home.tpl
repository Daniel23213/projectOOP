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
                {if isset($workspaces) && is_array($workspaces)}
                    {foreach $workspaces as $workspace}
                    <h1>Workspace</h1>
                        <button>SS</button>
                    {/foreach}
                    {/if}
                    <a href="index.php?action=newWorkSpace" class="btn-login">Make a new workspace</a>
                    <a href="index.php?action=logout" class="btn-login">Logout</a>
                {else}
                    <h1>Welcome to our website!</h1>
                    <div class="login-container">
                        <a href="index.php?action=loginForm" class="btn-login">Sign In</a>
                    </div>
                    <div class="login-container">
                        <a href="index.php?action=signupForm" class="btn-login">Sign Up</a>
                    </div>
                {/if}
            </div>

        </main>
    </div>
{/block}
