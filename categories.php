<?php

include_once('./partials/header.php');
include_once('./controllers/conn.php');

?>

<div class="hero  small">
    <div class="darken"></div>

    <h1>
        Categories
    </h1>
</div>

<main>
    <div class="job-display-wrapper">
        <h1>
            All Categories
        </h1>

        <div class="category-display-container home">
            <?php echo fetchCategoriesWithCount(); ?>

        </div>
    </div>
</main>

<?php

include_once('./partials/footer.php');

?>