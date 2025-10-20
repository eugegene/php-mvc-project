<div class="crud-table-wrapper">
    <h2>Manage users</h2>
    <a href="index.php?page=users&action=create" class="crud-btn">Add</a>

    <table class="crud-form">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php while ($user = $users->fetch_assoc()): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td>
                    <a href="index.php?page=users&action=edit&id=<?= $user['id'] ?>">Edit</a>
                    <a href="index.php?page=users&action=delete&id=<?= $user['id'] ?>"
                       onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
