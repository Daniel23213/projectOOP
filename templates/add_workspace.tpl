{extends file="templates/layout.tpl"}

{block name="content"}
    <h1>Make a new workspace</h1>
    <form action="/index.php?action=newWorkSpace" method="POST" id="newWorkSpace">
        <label>Name</label>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Add">
    </form>


{/block}