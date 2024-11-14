<?php
/* Smarty version 5.4.1, created on 2024-11-14 18:46:05
  from 'file:templates/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6736456d5a9236_88352861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec52bcd1048ba36d9819fc9f6bb3beb5c7122858' => 
    array (
      0 => 'templates/layout.tpl',
      1 => 1731609961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6736456d5a9236_88352861 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>

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
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1813899236736456d5a2915_02830880', "signup");
?>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_120840576736456d5a6db0_61580624', "content");
?>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14138683986736456d5a8332_37690891', "contact");
?>

    </main>

</head>
<?php }
/* {block "signup"} */
class Block_1813899236736456d5a2915_02830880 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "signup"} */
/* {block "content"} */
class Block_120840576736456d5a6db0_61580624 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "content"} */
/* {block "contact"} */
class Block_14138683986736456d5a8332_37690891 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "contact"} */
}
