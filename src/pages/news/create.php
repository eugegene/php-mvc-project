<div class="crud-form">
    <h2>Add News</h2>
    <form action="index.php?page=news&action=create" method="post">
        <input hidden name="action" value="save_created_news">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Contents:</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <button class="crud-submit-btn" type="submit">Save</button>
    </form>
</div>