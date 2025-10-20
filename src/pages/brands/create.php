<div class="crud-table-wrapper">
    <h2>Додати бренд</h2>
    <form class="crud-table" action="index.php?page=brands&action=create" method="post">
        <input hidden name="action" value="save_created_brand">
        <div>
            <label for="name">Назва бренду:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button class="crud-btn" type="submit">Зберегти</button>
    </form>
</div>