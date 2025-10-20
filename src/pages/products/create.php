<div class="crud-form">
    <h2>Add Product</h2>
    <form action="index.php?page=products&action=create" method="post">
        <input hidden name="action" value="save_created_product">
        <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="brand_id">Brand:</label>
            <select id="brand_id" name="brand_id" required>
                <?php while ($brand = $brands->fetch_assoc()): ?>
                    <option value="<?= $brand['id'] ?>"><?= htmlspecialchars($brand['name']) ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <button class="crud-submit-btn" type="submit">Save</button>
    </form>
</div>