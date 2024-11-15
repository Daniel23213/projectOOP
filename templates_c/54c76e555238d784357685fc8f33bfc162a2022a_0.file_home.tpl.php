<?php
/* Smarty version 5.4.1, created on 2024-11-15 23:06:21
  from 'file:templates/home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6737d3ed6b2888_97509723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c76e555238d784357685fc8f33bfc162a2022a' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1731709538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6737d3ed6b2888_97509723 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5665509756737d3ed6ac1d3_77627279', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "templates/layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_5665509756737d3ed6ac1d3_77627279 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
?>

    <div class="container">
        <header>
            <h1>Welcome to Your Task Manager</h1>
        </header>

        <main>
            <div class="welcome-message">
                <?php if ($_smarty_tpl->getValue('username')) {?>
                    <h1>Welcome, <?php echo $_smarty_tpl->getValue('username');?>
!</h1>
                <?php } else { ?>
                    <h1>Welcome to our website!</h1>
                <?php }?>
            </div>

            <div class="login-container">
                <a href="index.php?action=loginForm" class="btn-login">Sign In</a>
            </div>
            <div class="login-container">
                <a href="index.php?action=signupForm" class="btn-login">Sign Up</a>
            </div>
        </main>
    </div>
<?php
}
}
/* {/block "content"} */
}
