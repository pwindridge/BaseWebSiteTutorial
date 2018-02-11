<?php require 'partials/head.php'; ?>

<header>
    <h1>Register as a User</h1>
</header>

<form method="post">
    <p>
        <label for="name">Full name: </label>
        <input type="text" id="name" name="name" placeholder="Your name">
    </p>
    <p>
        <label for="email">Email address: </label>
        <input type="email" id="email" name="email" placeholder="Your email">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>

<?php require 'partials/foot.php'; ?>
