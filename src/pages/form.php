<h2>Форма</h2>

<form action="index.php?page=form" method="post">
<fieldset>
    <input type="hidden" name="action" value="saveform">
    <label for="lastname">Last name:</label><br>
    <input class="form-text" type="text" name="lastname" placeholder="Enter last name" value="<?= htmlspecialchars($lastname ?? '') ?>" > </br>
    
    <label for="firstname">First name:</label><br>
    <input class="form-text" type="text" name="firstname" placeholder="Enter first name" value="<?= htmlspecialchars($firstname ?? '') ?>" > </br>
    
    <!-- <label for="middlename">Ваше по-батькові:</label><br>
    <input class="form-text" type="text" name="middlename" placeholder="Enter middle name" value="<?= htmlspecialchars($middlename ?? '') ?>" > </br> -->
    
    <label for="age">Your age:</label><br>
    <select class="form-select" name="age">
    <?php
    $ageOptions = json_decode(file_get_contents(__DIR__ . "/../config/age_options.json"), true);
    foreach ($ageOptions as $value => $label) {
        echo '<option value="' . htmlspecialchars($value) . '">' . htmlspecialchars($label) . '</option>';
    }
    ?>
    </select>
    </select> </br>

    <label for="bio">Tell about yourself:</label><br>
    <input class="form-text" type="text" name="bio" placeholder="Write here..." value="<?= htmlspecialchars($bio ?? '') ?>"> </br>
    
    <button class="form-submit" type="submit" name="submit">Send</button>
</fieldset>
</form>