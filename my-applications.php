<?php

include_once('./partials/header.php');
include_once('./controllers/conn.php');
if (!isset($_SESSION['uid'])) {
    header('Location: login.php');
}

?>

<div class="hero small">
    <div class="darken"></div>
    <h1>
        My Job Applications
    </h1>

</div>

<main>
    <div class="job-display-wrapper">
        <h1>
            My Job Applications
        </h1>

        <div class="job-display-container">
            <?php echo fetchUserAppliedJobs(); ?>
        </div>
    </div>
</main>

<?php

include_once('./partials/footer.php');

?>