<div class="crud-table-wrapper">
  <h2>Edit brand</h2>
  <form class="crud-table" action="index.php?page=brands&action=edit&id=<?= $brand['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?= htmlspecialchars($brand['name']) ?>" required>
    </div>
    <button class="crud-btn" type="submit">Save</button>
  </form>
</div>