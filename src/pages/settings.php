<div class="general-form">
    <h2>Settings</h2>

    <form action="index.php?page=settings" method="post">
        <input type="hidden" name="action" value="save_bgcolor">
        <div class="form-group">
            <label for="bgcolor">Background Color:</label>
            <input type="color" id="bgcolor" name="bgcolor" value="#ffffff" required>
        </div>
        <button class="crud-submit-btn" type="submit">Save Color</button>
    </form>
</div>

<div class="general-form">
    <form action="index.php?page=settings" method="post">
        <input type="hidden" name="action" value="save_user">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <button class="crud-submit-btn" type="submit">Save User Info</button>
    </form>
</div>