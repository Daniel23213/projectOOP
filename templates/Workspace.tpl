{extends file="templates/layout.tpl"}

{block name="content"}
<div class="workspace-container">

    <h1>{$workspace->getName()}</h1>


    <div class="task-board">

        {foreach $status as $stage}
            <div class="task-column">

                <h3>{$stage.status}</h3>
                <a href="index.php?action=createTask" class="btn-task-add">Add New Task</a>
                <ul>
                    {if isset($tasks) && !empty($tasks)}
                        {foreach $tasks as $task}
                            {if $task.stage == $stage.status}
                                <li>
                                    <h4>{$task.name}</h4>

                                    <a href="index.php?action=createTask&task_id={$task.id}" class="btn-task">Make a Task</a>
                                </li>
                            {/if}
                        {/foreach}
                    {else}
                        <li>No tasks in this stage</li>
                    {/if}
                </ul>
            </div>
        {/foreach}
    </div>

    <!-- Link to Add a New Task -->

</div>
{/block}