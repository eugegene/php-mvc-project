<div class="crud-form">
    <h2>Add Page</h2>
    <form action="index.php?page=pages&action=create" method="post">
        <input hidden name="action" value="save_created_page">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="keywords">Keywords:</label>
            <input type="text" id="keywords" name="keywords">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="h1">H1:</label>
            <input type="text" id="h1" name="h1">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <button class="crud-submit-btn" type="submit">Save</button>
    </form>
</div>