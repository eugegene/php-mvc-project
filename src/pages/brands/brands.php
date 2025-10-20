<div class="crud-table-wrapper">
    <h2>Manage brands</h2>
    <a href="index.php?page=brands&action=create" class="crud-btn">Add</a>

    <table class="crud-form">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php while ($brand = $brands->fetch_assoc()): ?>
            <tr>
                <td><?= $brand['id'] ?></td>
                <td><?= htmlspecialchars($brand['name']) ?></td>
                <td>
                    <a href="index.php?page=brands&action=edit&id=<?= $brand['id'] ?>">Edit</a>
                    <a href="index.php?page=brands&action=delete&id=<?= $brand['id'] ?>"
                        onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>