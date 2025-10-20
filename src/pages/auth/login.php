<h2>Авторизація</h2>

<?php if (!empty($error)): ?>
    <div class="error"><?= $error ?></div>
<?php endif; ?>

<form action="index.php?page=auth" method="post">
    <fieldset>
        <input type="hidden" name="action" value="login">
            <label for="username">Логін:</label><br>
            <input class="form-text" type="text" id="username" name="username" required>
            <label for="password">Пароль:</label><br>
            <input class="form-text" type="password" id="password" name="password" required>
        <button class="form-submit" type="submit">Увійти</button>
    </fieldset>
</form>