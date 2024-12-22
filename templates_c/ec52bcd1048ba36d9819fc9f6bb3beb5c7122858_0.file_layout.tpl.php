<?php
/* Smarty version 5.4.2, created on 2024-12-22 19:56:58
  from 'file:templates/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67686f0acd1271_97388299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec52bcd1048ba36d9819fc9f6bb3beb5c7122858' => 
    array (
      0 => 'templates/layout.tpl',
      1 => 1734788503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67686f0acd1271_97388299 (\Smarty\Template $_smarty_tpl) {
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
</head>
<body>
<main>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_166083538967686f0accb016_16544406', "signup");
?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_202143075067686f0acce7a0_64072890', "content");
?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_98123857367686f0acd01f0_87992008', "contact");
?>

</main>
</body>
</html>
<?php }
/* {block "signup"} */
class Block_166083538967686f0accb016_16544406 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "signup"} */
/* {block "content"} */
class Block_202143075067686f0acce7a0_64072890 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "content"} */
/* {block "contact"} */
class Block_98123857367686f0acd01f0_87992008 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "contact"} */
}
