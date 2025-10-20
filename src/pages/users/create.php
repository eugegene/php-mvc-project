<div class="crud-table-wrapper">
    <h2>Add user</h2>
    <form class="crud-table" action="index.php?page=users&action=create" method="post">
        <input hidden name="action" value="save_created_user">
        <div>
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button class="crud-btn" type="submit">Save</button>
    </form>
</div>