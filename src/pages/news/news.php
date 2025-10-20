<div class="crud-table-wrapper">
    <div class="crud-header">
        <h2>Manage News</h2>
        <a href="index.php?page=news&action=create" class="crud-btn add-new">Add News</a>
    </div>
    <table class="crud-table">
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