<div class="crud-table-wrapper">
  <h2>Edit news</h2>
  <form class="crud-table" action="index.php?page=news&action=edit&id=<?= $news['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" value="<?= htmlspecialchars($news['title']) ?>" required>
    </div>
    <div>
      <label for="content">Contents:</label>
      <textarea id="content" name="content" required><?= htmlspecialchars($news['content']) ?></textarea>
    </div>
    <button class="crud-btn" type="submit">Save</button>
  </form>
</div>