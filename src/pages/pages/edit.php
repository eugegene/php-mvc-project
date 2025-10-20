<div class="crud-form">
  <h2>Edit Page</h2>
  <form action="index.php?page=pages&action=edit&id=<?= $page_data['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" value="<?= htmlspecialchars($page_data['title']) ?>" required>
    </div>
    <div class="form-group">
      <label for="keywords">Keywords:</label>
      <input type="text" id="keywords" name="keywords" value="<?= htmlspecialchars($page_data['keywords']) ?>">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea id="description" name="description"><?= htmlspecialchars($page_data['description']) ?></textarea>
    </div>
    <div class="form-group">
      <label for="h1">H1:</label>
      <input type="text" id="h1" name="h1" value="<?= htmlspecialchars($page_data['h1']) ?>">
    </div>
    <div class="form-group">
      <label for="content">Content:</label>
      <textarea id="content" name="content" required><?= htmlspecialchars($page_data['content']) ?></textarea>
    </div>
    <button class="crud-submit-btn" type="submit">Save</button>
  </form>
</div>