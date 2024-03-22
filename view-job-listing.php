<?php
include_once('./partials/header.php');
include_once('./controllers/conn.php');

if (isset($_GET['id'])) {
    $jobId = $_GET['id'];
    $query = "SELECT * FROM job WHERE id = $jobId";
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        $job = $result->fetch_assoc();
?>

        <div class="hero small">
            <div class="darken"></div>
            <h1>
                <?php echo $job['title']; ?>
            </h1>
        </div>

        <main>
            <div class="view-job-listing-wrapper">
                <div class="top-section">
                    <div class="details">
                        <img src="./images/4W1Vqj-LogoMakr.png" alt="" srcset="">
                        <h1><?php echo $job['title']; ?></h1>
                        <h2><?php echo $job['company']; ?></h2>
                        <span><?php echo $job['category']; ?></span>

                        <?php
                        if (isset($_SESSION['uid'])) {
                            $userId = $_SESSION['uid'];
                            $i = $job['id'];
                            $checkQuery = "SELECT * FROM job_applications WHERE user_id = $userId AND job_id = $i";
                            $checkResult = $conn->query($checkQuery);

                            if ($checkResult && $checkResult->num_rows > 0) {
                                echo '<span class="already-applied">Already applied</span>';
                            } else {
                                echo '<button data-jobid="job_' . $job['id'] . '" onclick="openApplyModal(' . $job['id'] . ')">Apply</button>';
                            }
                        } else {
                            echo '<button onclick="window.location.href=\'login.php\'" class="login-to-apply">Login to apply</button >';
                        }
                        ?>

                        <!-- <button onclick="openApplyModal(' <?php echo $job['id']; ?> ')">Apply now</button> -->
                    </div>
                    <div class="overview">
                        <h1>Overview</h1>
                        <div class="row">
                            <div>Preferred gender :</div>
                            <span><?php echo $job['preferred_gender']; ?></span>
                        </div>
                        <div class="row">
                            <div>Age range :</div>
                            <span>

                                <?php echo ($job['minimum_age'] ? $job['minimum_age'] : 'null') . ' - ' . ($job['maximum_age'] ? $job['maximum_age'] : 'null'); ?>

                            </span>
                        </div>
                        <div class="row">
                            <div>Minimum qualifications :</div>
                            <span><?php echo $job['minimum_qualification_level']; ?></span>
                        </div>
                        <div class="row">
                            <div>Minimum years of experience :</div>
                            <span><?php echo $job['minimum_years_experience']; ?></span>
                        </div>
                        <div class="row">
                            <div>Email :</div>
                            <span><?php echo $job['contact_email']; ?></span>
                        </div>
                        <div class="row">
                            <div>Phone :</div>
                            <span><?php echo $job['contact_number']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="bottom-section">
                    <pre><?php echo $job['description']; ?></pre>
                </div>
            </div>

            <div class="job-display-wrapper">
                <h1>
                    Related
                </h1>

                <div class="job-display-container">

                    <?php
                    echo fetchRelatedJobs($job['category'], $job['id']);
                    ?>

                </div>
            </div>
        </main>

<?php
    } else {
        echo "Job not found";
    }
} else {
    header("Location: index.php");
}
include_once('./partials/footer.php');
?>