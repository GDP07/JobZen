<?php
ob_start();
session_start();
include_once("./controllers/functions.php");
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    
    <script src="./scripts/index.js" defer></script>
    <script src="./scripts/reuests.js" defer></script>
    <title>Jobzen</title>
</head>

<body>

    <header>
        <nav>
            <img src="./images/4W1Vqj-LogoMakr.png" alt="" onclick="window.location.href='./index.php'">
            <ul class="hide-menu navigation">

                <button class="close-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>

                <li <?php if ($current_page == 'create-job.php') echo ' class="active"'; ?>>
                    <a href="./create-job.php">Post a Job</a>
                </li>
                <li <?php if ($current_page == 'job-listings.php') echo ' class="active"'; ?>>
                    <a href="./job-listings.php">Find a job</a>
                </li>
                <li <?php if ($current_page == 'categories.php') echo ' class="active"'; ?>>
                    <a href="categories.php">Categories</a>
                </li>


                <?php

                if (isset($_SESSION['uid'])) {
                ?>
                    <li class="my-account">
                        My account
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                        </svg>

                        <ul>
                            <li <?php if ($current_page == 'my-jobs.php') echo ' class="active"'; ?>><a href="./my-jobs.php">My listings</a></li>
                            <li <?php if ($current_page == 'my-applications.php') echo ' class="active"'; ?>><a href="./my-applications.php">My applications</a></li>
                            <li <?php if ($current_page == 'settings.php') echo ' class="active"'; ?>><a href="./settings.php">Settings</a></li>
                            <li <?php if ($current_page == 'logout.php') echo ' class="active"'; ?>><a href="./logout.php">Logout</a></li>


                        </ul>
                    </li>

                    <li class="<?php echo ($current_page == 'my-jobs.php') ? 'active' : ''; ?> hidden-menu-links"><a href="./my-jobs.php">My listings</a></li>
                    <li class="<?php echo ($current_page == 'my-applications.php') ? 'active' : ''; ?> hidden-menu-links"><a href="./my-applications.php">My applications</a></li>
                    <li class="<?php echo ($current_page == 'settings.php') ? 'active' : ''; ?> hidden-menu-links"><a href="./settings.php">Settings</a></li>
                    <li class="<?php echo ($current_page == 'logout.php') ? 'active' : ''; ?> hidden-menu-links"><a href="./logout.php">Logout</a></li>

                <?php } else { ?>
                    <li <?php if ($current_page == 'my-jobs.php') echo ' class="active"'; ?>>
                        <a href="./login.php">Login</a>
                    </li>
                    <li <?php echo ($current_page == 'my-jobs.php') ? 'class="active"' : ''; ?>>
                        <a href="./register.php">Sign up</a>
                    </li>
                <?php }




                ?>

            </ul>

            <button class="open-nav">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
            </button>

        </nav>
    </header>

    <div class="alert-wrapper">
    </div>

    <div class="application-modal">

        <form id="submitApplication" action="">

            <h1>Apply</h1>

            <button class="close-btn" type="button" onclick="closeApplyModal()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                </svg>
            </button>

            <input required type="hidden" name="jobId">

            <div class="input-container">
                <input required type="text" placeholder=" " id="name" name="name" autocomplete="off">
                <label for="name">Name</label>
            </div>

            <div class="input-container">
                <input required type="text" placeholder=" " id="email" name="email" autocomplete="off">
                <label for="email">Email</label>
            </div>

            <div class="input-container with-textarea">
                <textarea required placeholder=" " id="coverLetter" name="coverLetter" autocomplete="off"></textarea>
                <label for="coverLetter">Cover Letter</label>
            </div>

            <div class="input-container">
                <input required type="text" placeholder=" " id="phoneNumber" name="phoneNumber" autocomplete="off">
                <label for="phoneNumber">Phone Number</label>
            </div>

            <div class="input-container with-image">
                <input required type="file" placeholder=" " id="uploadCv" name="uploadCv" accept=".pdf" autocomplete="off" onchange="validateFileSize(this, 10485760)">
                <label for="uploadCv">Upload Cv</label>
            </div>

            <button>Apply</button>

        </form>

    </div>