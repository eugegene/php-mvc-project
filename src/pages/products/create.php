<div class="crud-table-wrapper">
    <h2>Додати товар</h2>
    <form class="crud-table" action="index.php?page=products&action=create" method="post">
        <input hidden name="action" value="save_created_product">
        <div>
            <label for="name">Назва:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="brand_id">Бренд:</label>
            <select id="brand_id" name="brand_id" required>
                <?php while ($brand = $brands->fetch_assoc()): ?>
                    <option value="<?= $brand['id'] ?>"><?= htmlspecialchars($brand['name']) ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div>
            <label for="price">Ціна:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <button class="crud-btn" type="submit">Зберегти</button>
    </form>
</div>