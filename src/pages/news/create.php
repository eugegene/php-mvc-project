<div class="crud-table-wrapper">
    <h2>Додати новину</h2>
    <form class="crud-table" action="index.php?page=news&action=create" method="post">
        <input hidden name="action" value="save_created_news">
        <div>
            <label for="title">Заголовок:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Зміст:</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <button class="crud-btn" type="submit">Зберегти</button>
    </form>
</div>