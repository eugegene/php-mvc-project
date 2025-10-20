<div class="crud-table-wrapper">
  <h2>Редагувати користувача</h2>
  <form class="crud-table" action="index.php?page=users&action=edit&id=<?= $user['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div>
      <label for="username">Им'я':</label>
      <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    <div>
      <label for="password">Новий пароль:</label>
      <input type="password" id="password" name="password">
    </div>
    <button class="crud-btn" type="submit">Зберегти</button>
  </form>
</div>