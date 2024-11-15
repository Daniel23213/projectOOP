<?php
/* Smarty version 5.4.1, created on 2024-11-15 23:06:21
  from 'file:templates/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6737d3ed6c6bf4_66665920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec52bcd1048ba36d9819fc9f6bb3beb5c7122858' => 
    array (
      0 => 'templates/layout.tpl',
      1 => 1731704424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6737d3ed6c6bf4_66665920 (\Smarty\Template $_smarty_tpl) {
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16863621896737d3ed6c3779_94785595', "signup");
?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_748775376737d3ed6c4c82_77111233', "content");
?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11913409786737d3ed6c5ec0_64991615', "contact");
?>

</main>
</body>
</html>
<?php }
/* {block "signup"} */
class Block_16863621896737d3ed6c3779_94785595 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "signup"} */
/* {block "content"} */
class Block_748775376737d3ed6c4c82_77111233 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "content"} */
/* {block "contact"} */
class Block_11913409786737d3ed6c5ec0_64991615 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
}
}
/* {/block "contact"} */
}
