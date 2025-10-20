<div class="crud-table-wrapper">
    <h2>Add news</h2>
    <form class="crud-form" action="index.php?page=news&action=create" method="post">
        <input hidden name="action" value="save_created_news">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Contents:</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <button class="crud-btn" type="submit">Save</button>
    </form>
</div>