<div class="crud-table-wrapper">
    <div class="crud-header">
        <h2>Manage Pages</h2>
        <a href="index.php?page=pages&action=create" class="crud-btn add-new">Add Page</a>
    </div>
    <table class="crud-table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        <?php while ($page_item = $pages->fetch_assoc()): ?>
            <tr>
                <td><?= $page_item['id'] ?></td>
                <td><?= htmlspecialchars($page_item['title']) ?></td>
                <td><?= htmlspecialchars(substr($page_item['content'], 0, 100)) ?>...</td>
                <td>
                    <a href="index.php?page=pages&action=edit&id=<?= $page_item['id'] ?>">Edit</a>
                    <a href="index.php?page=pages&action=delete&id=<?= $page_item['id'] ?>"
                        onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>