<div class="crud-form">
  <h2>Edit User</h2>
  <form action="index.php?page=users&action=edit&id=<?= $user['id'] ?>" method="post">
    <input hidden name="action" value="save_edited">
    <div class="form-group">
      <label for="username">Name:</label>
      <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    <div class="form-group">
      <label for="password">New Password:</label>
      <input type="password" id="password" name="password">
    </div>
    <button class="crud-submit-btn" type="submit">Save</button>
  </form>
</div>