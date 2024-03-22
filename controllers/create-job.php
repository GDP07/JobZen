<?php
require_once('./conn.php');
session_start();

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $stmt = $conn->prepare("INSERT INTO job (title, company, company_url, location, category, job_type, contact_number, contact_email, monthly_pay, preferred_gender, minimum_qualification_level, maximum_age, minimum_age, minimum_years_experience, banner_image, description, posted_by, closing_date, closing_time, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssssssssssssssssss", $title, $company, $companyUrl, $location, $category, $jobType, $contactNumber, $contactEmail, $monthlyPay, $preferredGender, $minimumQualificationLevel, $maximumAge, $minimumAge, $minimumYearsExperience, $bannerImage, $description, $postedBy, $closingDate, $closingTime, $createdAt);

        $title = $_POST['jobTitle'];
        $location = $_POST['location'];
        $category = $_POST['categories'];
        $jobType = $_POST['workingHours'];
        $contactNumber = $_POST['phoneNumber'];
        $contactEmail = $_POST['email'];
        $monthlyPay = isset($_POST['salary']) ? $_POST['salary'] : null;
        $preferredGender = $_POST['preferredGender'];
        $minimumQualificationLevel = $_POST['minimumQualificationLevel'];
        $maximumAge = isset($_POST['maxAge']) ? $_POST['maxAge'] : null;
        $minimumAge = isset($_POST['minAge']) ? $_POST['minAge'] : null;
        $minimumYearsExperience = isset($_POST['experience']) ? $_POST['experience'] : null;
        $bannerImage = $_FILES['bannerImage']['name'];
        $description = $_POST['jobDescription'];
        $closingDate = $_POST['closingDate'];
        $closingTime = $_POST['closingTime'];
        $company = $_POST['companyName'];
        $companyUrl = isset($_POST['companyWebsite']) ? $_POST['companyWebsite'] : null;
        $createdAt = time();
        $postedBy = $_SESSION['uid'];

        if ($bannerImage) {
            $targetDir = "../jobBanners/";
            $targetFile = $targetDir . basename($_FILES["bannerImage"]["name"]);
            move_uploaded_file($_FILES["bannerImage"]["tmp_name"], $targetFile);
        }

        if ($stmt->execute()) {
            echo "Job listing created successfully!";
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
