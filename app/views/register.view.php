<?php require 'partials/head.php'; ?>

<form action="/register-details" method="post">
    <fieldset>
        <legend>Personal Details</legend>
        <p>
            <label for="first_name">First name:</label>
            <input type="text" id="first_name" name="first_name" placeholder="first name">
        </p>
        <p>
            <label for="surname">Last name:</label>
            <input type="text" id="surname" name="surname" placeholder="surname">
        </p>
        <p>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" placeholder="age">
        </p>
        <input type="submit">
    </fieldset>
</form>

<?php require 'partials/foot.php'; ?>
