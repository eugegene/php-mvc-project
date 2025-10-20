<div class="crud-table-wrapper">
    <h2>Управління сторінками</h2>
    <a href="index.php?page=pages&action=create" class="crud-btn">Додати сторінку</a>

    <table class="crud-table">
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Keywords</th>
            <th>Description</th>
            <th>H1</th>
            <th>Контент</th>
            <th>Дія</th>
        </tr>
        <?php while ($page_item = $pages->fetch_assoc()): ?>
            <tr>
                <td><?= $page_item['id'] ?></td>
                <td><?= htmlspecialchars($page_item['title']) ?></td>
                <td><?= htmlspecialchars($page_item['keywords']) ?></td>
                <td><?= htmlspecialchars($page_item['description']) ?></td>
                <td><?= htmlspecialchars($page_item['h1']) ?></td>
                <td>
                    <div class="content-preview"><?= htmlspecialchars(substr($page_item['content'], 0, 100)) ?>...</div>
                </td>
                <td>
                    <a href="index.php?page=pages&action=edit&id=<?= $page_item['id'] ?>">Редагувати</a>
                    <a href="index.php?page=pages&action=delete&id=<?= $page_item['id'] ?>"
                        onclick="return confirm('Видалити?')">Видалити</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>