{extends file="templates/layout.tpl"}
{block name="signup"}
    <h1>Login</h1>
    <form action="/index.php?action=login" method="POST" id="login">
        <label>Email</label>
<input type="email" id="email" name="email"><br><br>
<label>Password</label>
<input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Log in">
    </form>
{/block}