<h2>Форма</h2>

<form action="index.php?page=form" method="post">
<fieldset>
    <input type="hidden" name="action" value="saveform">
    <label for="lastname">Ваше прізвище:</label><br>
    <input class="form-text" type="text" name="lastname" placeholder="Введіть прізвище" value="<?= htmlspecialchars($lastname ?? '') ?>" > </br>
    
    <label for="firstname">Ваше ім'я:</label><br>
    <input class="form-text" type="text" name="firstname" placeholder="Введіть ім'я" value="<?= htmlspecialchars($firstname ?? '') ?>" > </br>
    
    <label for="middlename">Ваше по-батькові:</label><br>
    <input class="form-text" type="text" name="middlename" placeholder="Введіть по-батькові" value="<?= htmlspecialchars($middlename ?? '') ?>" > </br>
    
    <label for="age">Вкажіть вік:</label><br>
    <select class="form-select" name="age">
    <?php
    $ageOptions = json_decode(file_get_contents(__DIR__ . "/../config/age_options.json"), true);
    foreach ($ageOptions as $value => $label) {
        echo '<option value="' . htmlspecialchars($value) . '">' . htmlspecialchars($label) . '</option>';
    }
    ?>
    </select>
    </select> </br>

    <label for="bio">Напишіть про себе:</label><br>
    <input class="form-text" type="text" name="bio" placeholder="Сюди" value="<?= htmlspecialchars($bio ?? '') ?>"> </br>
    
    <button class="form-submit" type="submit" name="submit">Відправити</button>
</fieldset>
</form>