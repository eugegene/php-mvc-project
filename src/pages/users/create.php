<div class="crud-form">
    <h2>Add User</h2>
    <form action="index.php?page=users&action=create" method="post">
        <input hidden name="action" value="save_created_user">
        <div class="form-group">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button class="crud-submit-btn" type="submit">Save</button>
    </form>
</div>