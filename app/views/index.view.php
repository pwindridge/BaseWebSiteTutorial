<?php require 'partials/head.php'; ?>

    <h1>Welcome to the MVC from scratch tutorial</h1>

    <form action="/search">
        <p>
            <label for="name">Search name:</label>
            <input type="text" id="name" name="name" placeholder="search name">
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>


<?php require 'partials/foot.php'; ?>