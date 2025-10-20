<div class="general-form">
    <h2>Authorization</h2>

    <?php if (!empty($error)): ?>
        <div class="form-error"><?= $error ?></div>
    <?php endif; ?>

    <form action="index.php?page=auth" method="post">
        <input type="hidden" name="action" value="login">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button class="crud-submit-btn" type="submit">Sign In</button>
    </form>
</div>