{extends file="templates/layout.tpl"}
{block name="signup"}
<h1>Register</h1>
    <form action="/index.php?action=signup" method="POST" id="signup">
        <label>Name</label>
       <input type="text" id="name" name="name" required><br><br>
        <label>Email</label>
        <input type="email" id="email" name="email" required><br><br>
         <label>Password</label>
        <input type="password" id="password" name="password" required><br><br>
        <label>Confrim Password</label>
        <input type="password" id="passwordConfirm" name="passwordConfirm" required><br><br>
        <input type="submit" value="Sign Up">
    </form>
{/block}