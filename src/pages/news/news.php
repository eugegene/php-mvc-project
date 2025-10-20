<div class="crud-table-wrapper">
    <h2>Управління новинами</h2>
    <a href="index.php?page=news&action=create" class="crud-btn">Додати новину</a>

    <table class="crud-table">
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Зміст</th>
            <th>Дія</th>
        </tr>
        <?php while ($news_item = $news->fetch_assoc()): ?>
            <tr>
                <td><?= $news_item['id'] ?></td>
                <td><?= htmlspecialchars($news_item['title']) ?></td>
                <td><?= htmlspecialchars(substr($news_item['content'], 0, 100)) ?>...</td>
                <td>
                    <a href="index.php?page=news&action=edit&id=<?= $news_item['id'] ?>">Редагувати</a>
                    <a href="index.php?page=news&action=delete&id=<?= $news_item['id'] ?>"
                        onclick="return confirm('Видалити?')">Видалити</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>