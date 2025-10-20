<div class="crud-table-wrapper">
  <h2>Редагувати сторінку</h2>
  <form class="crud-table" action="index.php?page=pages&action=edit&id=<?= $page_data['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div>
      <label for="title">Заголовок:</label>
      <input type="text" id="title" name="title" value="<?= htmlspecialchars($page_data['title']) ?>" required>
    </div>
    <div>
      <label for="keywords">Keywords:</label>
      <input type="text" id="keywords" name="keywords" value="<?= htmlspecialchars($page_data['keywords']) ?>">
    </div>
    <div>
      <label for="description">Description:</label>
      <textarea id="description" name="description"><?= htmlspecialchars($page_data['description']) ?></textarea>
    </div>
    <div>
      <label for="h1">H1:</label>
      <input type="text" id="h1" name="h1" value="<?= htmlspecialchars($page_data['h1']) ?>">
    </div>
    <div>
      <label for="content">Контент:</label>
      <textarea id="content" name="content" required><?= htmlspecialchars($page_data['content']) ?></textarea>
    </div>
    <button class="crud-btn" type="submit">Зберегти</button>
  </form>
</div>