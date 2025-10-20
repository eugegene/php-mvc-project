<div class="crud-table-wrapper">
  <h2>Редагувати бренд</h2>
  <form class="crud-table" action="index.php?page=brands&action=edit&id=<?= $brand['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div>
      <label for="name">Назва бренда:</label>
      <input type="text" id="name" name="name" value="<?= htmlspecialchars($brand['name']) ?>" required>
    </div>
    <button class="crud-btn" type="submit">Зберегти</button>
  </form>
</div>