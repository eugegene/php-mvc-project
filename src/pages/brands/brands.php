<div class="crud-table-wrapper">
    <h2>Управління брендами</h2>
    <a href="index.php?page=brands&action=create" class="crud-btn">Додати бренд</a>

    <table class="crud-table">
        <tr>
            <th>ID</th>
            <th>Назва</th>
            <th>Дія</th>
        </tr>
        <?php while ($brand = $brands->fetch_assoc()): ?>
            <tr>
                <td><?= $brand['id'] ?></td>
                <td><?= htmlspecialchars($brand['name']) ?></td>
                <td>
                    <a href="index.php?page=brands&action=edit&id=<?= $brand['id'] ?>">Редагувати</a>
                    <a href="index.php?page=brands&action=delete&id=<?= $brand['id'] ?>"
                        onclick="return confirm('Видалити?')">Видалити</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>