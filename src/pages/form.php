<div class="general-form">
    <h2>Form</h2>

    <form action="index.php?page=form" method="post">
        <input type="hidden" name="action" value="saveform">
        <div class="form-group">
            <label for="lastname">Last name:</label>
            <input type="text" name="lastname" placeholder="Enter last name" value="<?= htmlspecialchars($lastname ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="firstname">First name:</label>
            <input type="text" name="firstname" placeholder="Enter first name" value="<?= htmlspecialchars($firstname ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="age">Your age:</label>
            <select name="age">
            <?php
                $ageOptions = json_decode(file_get_contents(__DIR__ . "/../config/age_options.json"), true);
                foreach ($ageOptions as $value => $label) {
                    echo '<option value="' . htmlspecialchars($value) . '">' . htmlspecialchars($label) . '</option>';
                }
            ?>
            </select>
        </div>
        <div class="form-group">
            <label for="bio">Tell about yourself:</label>
            <textarea name="bio" placeholder="Write here..."><?= htmlspecialchars($bio ?? '') ?></textarea>
        </div>
        <button class="crud-submit-btn" type="submit" name="submit">Send</button>
    </form>
</div>