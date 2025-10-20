<div class="crud-table-wrapper">
    <h2>Add brand</h2>
    <form class="crud-form" action="index.php?page=brands&action=create" method="post">
        <input hidden name="action" value="save_created_brand">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button class="crud-btn" type="submit">Save</button>
    </form>
</div>