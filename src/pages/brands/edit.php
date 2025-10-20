<div class="crud-form">
  <h2>Edit Brand</h2>
  <form action="index.php?page=brands&action=edit&id=<?= $brand['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?= htmlspecialchars($brand['name']) ?>" required>
    </div>
    <button class="crud-submit-btn" type="submit">Save</button>
  </form>
</div>