<h2>Налаштування</h2>

<form action="index.php?page=settings" method="post">
    <fieldset>
        <input type="hidden" name="action" value="save_bgcolor">
        <label class="form-select" for="bgcolor">Background color:</label>
        <input type="color" id="bgcolor" name="bgcolor" value="#ffffff" required>
        <input class="form-submit" type="submit" value="Save">
    </fieldset>
</form>

<form action="index.php?page=settings" method="post">
    <fieldset>
        <input type="hidden" name="action" value="save_user">
        <label for="name">Name:</label>
        <input class="form-text" type="text" id="name" name="name" required>

        <label for="gender">Sex:</label>
        <select class="form-select" id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <input class="form-submit" type="submit" value="Save">
    </fieldset>
</form>