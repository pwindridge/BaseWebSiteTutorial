<?php require 'partials/head.php'; ?>

<header>
    <h1>Welcome to the MVC from scratch tutorial</h1>
</header>

<h2>Search for a name</h2>

<form method="get" action="/search">
    <p>
        <label for="name">Search name:</label>
        <input type="text" id="name" name="name" placeholder="name">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>

<?php require 'partials/foot.php'; ?>