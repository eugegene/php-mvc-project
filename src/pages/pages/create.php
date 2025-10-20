<div class="crud-table-wrapper">
    <h2>Додати сторінку</h2>
    <form class="crud-table" action="index.php?page=pages&action=create" method="post">
        <input hidden name="action" value="save_created_page">
        <div>
            <label for="title">Заголовок:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="keywords">Keywords:</label>
            <input type="text" id="keywords" name="keywords">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="h1">H1:</label>
            <input type="text" id="h1" name="h1">
        </div>
        <div>
            <label for="content">Контент:</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <button class="crud-btn" type="submit">Зберегти</button>
    </form>
</div>