<?php

include_once('./partials/header.php');

if (!isset($_SESSION['uid'])) {
    header('Location: login.php');
}

?>

<div class="hero small">
    <div class="darken"></div>
    <h1>
        Account Settings
    </h1>

</div>

<main>

    <div class="auth-wrapper">

        <form action="" id="changePassword">

            <div class="input-container">
                <input type="text" placeholder=" " id="password" name="password" autocomplete="off">
                <label for="password">New Password</label>
            </div>
            <div class="input-container">
                <input type="text" placeholder=" " id="confirmPassword" name="confirmPassword" autocomplete="off">
                <label for="confirmPassword">Confirm password</label>
            </div>

            <button>Update</button>

        </form>

    </div>

</main>

<?php

include_once('./partials/footer.php');

?>