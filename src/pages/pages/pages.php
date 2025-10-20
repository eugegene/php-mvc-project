<div class="crud-table-wrapper">
    <h2>Manage pages</h2>
    <a href="index.php?page=pages&action=create" class="crud-btn">Add</a>

    <table class="crud-form">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Keywords</th>
            <th>Description</th>
            <th>H1</th>
            <th>Content</th>
            <th>Action</th>
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
                    <a href="index.php?page=pages&action=edit&id=<?= $page_item['id'] ?>">Edit</a>
                    <a href="index.php?page=pages&action=delete&id=<?= $page_item['id'] ?>"
                        onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>