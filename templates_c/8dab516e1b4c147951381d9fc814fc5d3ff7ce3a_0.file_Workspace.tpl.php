<?php
/* Smarty version 5.4.2, created on 2024-12-23 18:26:28
  from 'file:templates/Workspace.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6769ab54b2a356_57064543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dab516e1b4c147951381d9fc814fc5d3ff7ce3a' => 
    array (
      0 => 'templates/Workspace.tpl',
      1 => 1734978387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6769ab54b2a356_57064543 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14532480896769ab54b18513_86190685', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "templates/layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_14532480896769ab54b18513_86190685 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\projectOOP\\templates';
?>

<div class="workspace-container">

    <h1><?php echo $_smarty_tpl->getValue('workspace')->getName();?>
</h1>


    <div class="task-board">

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('status'), 'stage');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('stage')->value) {
$foreach0DoElse = false;
?>
            <div class="task-column">

                <h3><?php echo $_smarty_tpl->getValue('stage')['status'];?>
</h3>
                <a href="index.php?action=createTask" class="btn-task-add">Add New Task</a>
                <ul>
                    <?php if ((null !== ($_smarty_tpl->getValue('tasks') ?? null)) && !empty($_smarty_tpl->getValue('tasks'))) {?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tasks'), 'task');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('task')->value) {
$foreach1DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('task')['stage'] == $_smarty_tpl->getValue('stage')['status']) {?>
                                <li>
                                    <h4><?php echo $_smarty_tpl->getValue('task')['name'];?>
</h4>

                                    <a href="index.php?action=createTask&task_id=<?php echo $_smarty_tpl->getValue('task')['id'];?>
" class="btn-task">Make a Task</a>
                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <li>No tasks in this stage</li>
                    <?php }?>
                </ul>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>

    <!-- Link to Add a New Task -->

</div>
<?php
}
}
/* {/block "content"} */
}
