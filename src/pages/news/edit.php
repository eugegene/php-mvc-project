<div class="crud-form">
  <h2>Edit News</h2>
  <form action="index.php?page=news&action=edit&id=<?= $news['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" value="<?= htmlspecialchars($news['title']) ?>" required>
    </div>
    <div class="form-group">
      <label for="content">Contents:</label>
      <textarea id="content" name="content" required><?= htmlspecialchars($news['content']) ?></textarea>
    </div>
    <button class="crud-submit-btn" type="submit">Save</button>
  </form>
</div>