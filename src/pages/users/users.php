<div class="crud-table-wrapper">
    <h2>Управління користувачами</h2>
    <a href="index.php?page=users&action=create" class="crud-btn">Додати користувача</a>

    <table class="crud-table">
        <tr>
            <th>ID</th>
            <th>Ім'я</th>
            <th>Дія</th>
        </tr>
        <?php while ($user = $users->fetch_assoc()): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td>
                    <a href="index.php?page=users&action=edit&id=<?= $user['id'] ?>">Редагувати</a>
                    <a href="index.php?page=users&action=delete&id=<?= $user['id'] ?>"
                       onclick="return confirm('Видалити?')">Видалити</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
