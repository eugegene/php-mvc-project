<div class="crud-table-wrapper">
    <h2>Управління товарами</h2>
    <a href="index.php?page=products&action=create" class="crud-btn">Додати товар</a>

    <table class="crud-table">
        <tr>
            <th>ID</th>
            <th>Назва</th>
            <th>Бренд</th>
            <th>Ціна</th>
            <th>Дія</th>
        </tr>
        <?php while ($product = $products->fetch_assoc()): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['brand_name']) ?></td>
                <td><?= number_format($product['price'], 2) ?></td>
                <td>
                    <a href="index.php?page=products&action=edit&id=<?= $product['id'] ?>">Редагувати</a>
                    <a href="index.php?page=products&action=delete&id=<?= $product['id'] ?>"
                        onclick="return confirm('Видалити?')">Видалити</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>