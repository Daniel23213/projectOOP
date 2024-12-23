<?php
/* Smarty version 5.4.2, created on 2024-12-23 18:26:28
  from 'file:templates/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6769ab54c4a584_44085216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec52bcd1048ba36d9819fc9f6bb3beb5c7122858' => 
    array (
      0 => 'templates/layout.tpl',
      1 => 1734906103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6769ab54c4a584_44085216 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Website</title>
    <link rel="stylesheet" href="/templates/style.css">
    <?php echo '<script'; ?>
 src="/templates/script.js"><?php echo '</script'; ?>
>
</head>
<body>
<main>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18259889846769ab54c47083_97968481', "signup");
?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11238560786769ab54c48616_71210985', "content");
?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10646091996769ab54c498c2_85162847', "contact");
?>

</main>
</body>
</html>
<?php }
/* {block "signup"} */
class Block_18259889846769ab54c47083_97968481 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "signup"} */
/* {block "content"} */
class Block_11238560786769ab54c48616_71210985 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "content"} */
/* {block "contact"} */
class Block_10646091996769ab54c498c2_85162847 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "contact"} */
}
