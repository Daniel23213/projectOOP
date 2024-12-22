<?php
/* Smarty version 5.4.2, created on 2024-12-22 19:56:58
  from 'file:templates/home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67686f0abe1320_06216335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c76e555238d784357685fc8f33bfc162a2022a' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1734896857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67686f0abe1320_06216335 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_90185233367686f0abd5066_56856602', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "templates/layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_90185233367686f0abd5066_56856602 extends \Smarty\Runtime\Block
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
                <?php if ((null !== ($_smarty_tpl->getValue('workspaces') ?? null)) && is_array($_smarty_tpl->getValue('workspaces'))) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('workspaces'), 'workspace');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('workspace')->value) {
$foreach0DoElse = false;
?>
                    <h1>Workspace</h1>
                        <button>SS</button>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <a href="index.php?action=newWorkSpace" class="btn-login">Make a new workspace</a>
                    <a href="index.php?action=logout" class="btn-login">Logout</a>
                <?php } else { ?>
                    <h1>Welcome to our website!</h1>
                    <div class="login-container">
                        <a href="index.php?action=loginForm" class="btn-login">Sign In</a>
                    </div>
                    <div class="login-container">
                        <a href="index.php?action=signupForm" class="btn-login">Sign Up</a>
                    </div>
                <?php }?>
            </div>

        </main>
    </div>
<?php
}
}
/* {/block "content"} */
}
