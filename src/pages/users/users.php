<div class="crud-table-wrapper">
    <div class="crud-header">
        <h2>Manage Users</h2>
        <a href="index.php?page=users&action=create" class="crud-btn add-new">Add User</a>
    </div>
    <table class="crud-table">
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