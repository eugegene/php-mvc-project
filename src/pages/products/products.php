<div class="crud-table-wrapper">
    <div class="crud-header">
        <h2>Manage Products</h2>
        <a href="index.php?page=products&action=create" class="crud-btn add-new">Add Product</a>
    </div>
    <table class="crud-table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php while ($product = $products->fetch_assoc()): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['brand_name']) ?></td>
                <td><?= number_format($product['price'], 2) ?></td>
                <td>
                    <a href="index.php?page=products&action=edit&id=<?= $product['id'] ?>">Edit</a>
                    <a href="index.php?page=products&action=delete&id=<?= $product['id'] ?>"
                        onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>