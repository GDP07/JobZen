<?php

include_once('./partials/header.php');

if (isset($_SESSION['uid'])) {
    header('Location: index.php');
}

?>

<div class="hero small">
    <div class="darken"></div>
    <h1>
        Login
    </h1>

</div>

<main>

    <div class="auth-wrapper">

        <form action="" id="loginForm">

            <div class=" input-container">
                <input type="text" placeholder=" " id="userName" name="userName" autocomplete="off">
                <label for="userName">User name</label>
            </div>
            <div class="input-container">
                <input type="text" placeholder=" " id="password" name="password" autocomplete="off">
                <label for="password">Password</label>
            </div>

            <button>Login</button>

        </form>

    </div>

</main>

<?php

include_once('./partials/footer.php');

?>