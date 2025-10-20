<div class="crud-table-wrapper">
  <h2>Edit user</h2>
  <form class="crud-form" action="index.php?page=users&action=edit&id=<?= $user['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div>
      <label for="username">Name':</label>
      <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    <div>
      <label for="password">New password:</label>
      <input type="password" id="password" name="password">
    </div>
    <button class="crud-btn add-new" type="submit">Save</button>
  </form>
</div>