<div class="crud-table-wrapper">
    <h2>Manage news</h2>
    <a href="index.php?page=news&action=create" class="crud-btn">Add</a>

    <table class="crud-form">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Contents</th>
            <th>Action</th>
        </tr>
        <?php while ($news_item = $news->fetch_assoc()): ?>
            <tr>
                <td><?= $news_item['id'] ?></td>
                <td><?= htmlspecialchars($news_item['title']) ?></td>
                <td><?= htmlspecialchars(substr($news_item['content'], 0, 100)) ?>...</td>
                <td>
                    <a href="index.php?page=news&action=edit&id=<?= $news_item['id'] ?>">Edit</a>
                    <a href="index.php?page=news&action=delete&id=<?= $news_item['id'] ?>"
                        onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>