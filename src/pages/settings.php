<h2>Налаштування</h2>

<form action="index.php?page=settings" method="post">
    <fieldset>
        <input type="hidden" name="action" value="save_bgcolor">
        <label class="form-select" for="bgcolor">Колір фону:</label>
        <input type="color" id="bgcolor" name="bgcolor" value="#ffffff" required>
        <input class="form-submit" type="submit" value="Зберегти колір фону">
    </fieldset>
</form>

<form action="index.php?page=settings" method="post">
    <fieldset>
        <input type="hidden" name="action" value="save_user">
        <label for="name">Ім'я:</label>
        <input class="form-text" type="text" id="name" name="name" required>

        <label for="gender">Стать:</label>
        <select class="form-select" id="gender" name="gender">
            <option value="male">Чоловік</option>
            <option value="female">Жінка</option>
        </select>

        <input class="form-submit" type="submit" value="Зберегти">
    </fieldset>
</form>