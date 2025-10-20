<div class="crud-form">
    <h2>Add Brand</h2>
    <form action="index.php?page=brands&action=create" method="post">
        <input hidden name="action" value="save_created_brand">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button class="crud-submit-btn" type="submit">Save</button>
    </form>
</div>