<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>At JobZen, we are dedicated to revolutionizing the job search experience. Our platform is designed to empower job seekers and employers alike, providing a seamless and efficient way to connect talent with opportunity.</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li <?php if ($current_page == 'about.php') echo ' class="active"'; ?>>
                    <a href="./about.php">About Us</a>
                </li>
                <li <?php if ($current_page == 'contact-us.php') echo ' class="active"'; ?>>
                    <a href="./contact-us.php">Contact Us</a>
                </li>
                <li <?php if ($current_page == 'terms-conditions.php') echo ' class="active"'; ?>>
                    <a href="./terms-conditions.php">Terms & Conditions</a>
                </li>
                <li <?php if ($current_page == 'create-job.php') echo ' class="active"'; ?>>
                    <a href="./create-job.php">Post a Job</a>
                </li>
                <li <?php if ($current_page == 'job-listings.php') echo ' class="active"'; ?>>
                    <a href="./job-listings.php">Find a job</a>
                </li>
                <li <?php if ($current_page == 'categories.php') echo ' class="active"'; ?>>
                    <a href="categories.php">Categories</a>
                </li>

                <?php if (isset($_SESSION['uid'])) {
                ?>
                    <li <?php if ($current_page == 'my-jobs.php') echo ' class="active"'; ?>><a href="./my-jobs.php">My listings</a></li>
                    <li <?php if ($current_page == 'my-applications.php') echo ' class="active"'; ?>><a href="./my-applications.php">My applications</a></li>
                    <li <?php if ($current_page == 'settings.php') echo ' class="active"'; ?>><a href="./settings.php">Settings</a></li>
                    <li <?php if ($current_page == 'logout.php') echo ' class="active"'; ?>><a href="./logout.php">Logout</a></li>
                <?php } else { ?>
                    <li <?php if ($current_page == 'my-jobs.php') echo ' class="active"'; ?>>
                        <a href="./login.php">Login</a>
                    </li>
                    <li <?php if ($current_page == 'my-jobs.php') echo ' class="active"'; ?>>
                        <a href="./register.php">Sign up</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="footer-section links">
            <h3>Contact Us</h3>
            <p onclick="window.open('mailto:info@jobzen.com', '_blank')">Email: info@jobzen.com</p>
            <p onclick="window.open('tel:123-456-7890', '_blank')">Phone: 123-456-7890</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Jobzen. All Rights Reserved.</p>
    </div>
</footer>


</body>

</html>