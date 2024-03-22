<?php
require_once('./conn.php');
session_start();
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $conn->prepare("UPDATE job SET title=?, company=?, company_url=?, location=?, category=?, job_type=?, contact_number=?, contact_email=?, monthly_pay=?, preferred_gender=?, minimum_qualification_level=?, maximum_age=?, minimum_age=?, minimum_years_experience=?, banner_image=?, description=?, closing_date=?, closing_time=? WHERE id=?");
        $stmt->bind_param("ssssssssssssssssssi", $title, $company, $companyUrl, $location, $category, $jobType, $contactNumber, $contactEmail, $monthlyPay, $preferredGender, $minimumQualificationLevel, $maximumAge, $minimumAge, $minimumYearsExperience, $bannerImage, $description, $closingDate, $closingTime, $jobId);

        $title = $_POST['jobTitle'];
        $location = $_POST['location'];
        $category = $_POST['categories'];
        $jobType = $_POST['workingHours'];
        $contactNumber = $_POST['phoneNumber'];
        $contactEmail = $_POST['email'];
        $monthlyPay = $_POST['salary'];
        $preferredGender = $_POST['preferredGender'];
        $minimumQualificationLevel = $_POST['minimumQualificationLevel'];
        $maximumAge = $_POST['maxAge'];
        $minimumAge = $_POST['minAge'];
        $minimumYearsExperience = $_POST['experience'];
        $description = $_POST['jobDescription'];
        $closingDate = $_POST['closingDate'];
        $closingTime = $_POST['closingTime'];
        $company = $_POST['companyName'];
        $companyUrl = $_POST['companyWebsite'];
        $jobId = $_POST['jobId'];
        $oldImage = $_POST['removedImage'];
        $isImageRemoved = $_POST['imageNotEmpty'];

        if ($isImageRemoved === '') {
            if ($oldImage !== '') {
                $oldImagePath = "../jobBanners/" . $oldImage;
                if (file_exists($oldImagePath)) {
                    if (!unlink($oldImagePath)) {
                        throw new Exception("Failed to delete old image");
                    }
                }
            }
        }

        $bannerImage = '';
        if (!empty($_FILES['bannerImage']['name'])) {
            $bannerImage = $_FILES['bannerImage']['name'];
            $targetDir = "../jobBanners/";
            $targetFile = $targetDir . basename($_FILES["bannerImage"]["name"]);
            if (!move_uploaded_file($_FILES["bannerImage"]["tmp_name"], $targetFile)) {
                throw new Exception("Failed to upload new image");
            }
        } else {
            if ($isImageRemoved === '') {
                $bannerImage = '';
            } else {
                $bannerImage = $isImageRemoved;
            }
        }

        if ($stmt->execute()) {
            http_response_code(200);
            echo "Job listing updated successfully!";
        } else {
            throw new Exception("Failed to update job listing");
        }

        $stmt->close();
        $conn->close();
    }
} catch (Exception $e) {
    http_response_code(500);
    echo "Error: " . $e->getMessage();
}
