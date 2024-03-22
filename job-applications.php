<?php
include_once('./partials/header.php');
include_once('./controllers/conn.php');

if (!isset($_SESSION['uid'])) {
    header("Location: index.php");
    exit;
}

if (isset($_GET['job_id'])) {
    $jobId = $_GET['job_id'];

    $userId = $_SESSION['uid'];
    $checkQuery = "SELECT title FROM job WHERE id = $jobId AND posted_by = $userId";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        while ($row = $checkResult->fetch_assoc()) {
            $jobTitle = $row['title'];
        }
    }

    if ($checkResult->num_rows == 0) {
        header("Location: index.php");
        exit;
    }


    $jobDetailsQuery = "SELECT * FROM job_applications WHERE job_id = $jobId ORDER BY seen, applied_at";
    $jobDetailsResult = $conn->query($jobDetailsQuery);

?>
    <div class="hero small">
        <div class="darken"></div>
        <h1>
            <?php
            echo  $jobTitle;
            ?>
        </h1>
    </div>

    <main>

        <div class="job-display-wrapper">
            <h1>
                Job Applications
            </h1>

            <div class="job-applicants-container">
                <?php
                if ($jobDetailsResult->num_rows > 0) {
                    while ($row = $jobDetailsResult->fetch_assoc()) {

                ?>
                        <article data-job-application-id="<?php echo $row['id']; ?>" <?php echo $row['seen'] == 1 ? 'class="seen"' : '' ?>>
                            <h1><?php echo $row['name']; ?></h1>
                            <h2><?php echo $row['email']; ?></h2>
                            <h2><?php echo $row['contact']; ?></h2>
                            <h3><?php echo $row['cover_letter']; ?></h3>
                            <div>
                                <a href="./cv/<?php echo $row['cv']; ?>" target="_blank">View CV</a>
                                <?php echo $row['seen'] == 1 ? '<button class="seen mark-unseen-btn" data-id="' . $row['id'] . '">Mark as unseen</button>' : ' <button class="seen mark-seen-btn" data-id="' . $row['id'] . '">Mark as seen</button>' ?>
                                <button data-job-application-id="<?php echo $row['id']; ?>" class="delete delete-application-btn">Delete</button>
                            </div>
                        </article>
                <?php
                    }
                } else {
                    echo "No job applicants found";
                }
                ?>
            </div>
        </div>
    </main>

<?php
} else {
    header("Location: index.php");
    exit;
}

include_once('./partials/footer.php');
?>