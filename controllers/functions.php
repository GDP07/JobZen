<?php
function fetchLatestJobs()
{
    global $conn;

    $currentDate = date("Y-m-d");

    $query = "SELECT * FROM job WHERE closing_date >= '$currentDate' ORDER BY created_at DESC LIMIT 10";

    $result = $conn->query($query);

    $output = '';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $created_at = $row["created_at"];
            $now = time();
            $timeAgo = '';
            $interval = $now - $created_at;

            $days = floor($interval / (60 * 60 * 24));
            $hours = floor(($interval % (60 * 60 * 24)) / (60 * 60));
            $minutes = floor(($interval % (60 * 60)) / 60);

            if ($days > 0) {
                $timeAgo = $days . ' days ago';
            } elseif ($hours > 0) {
                $timeAgo = $hours . ' hours ago';
            } elseif ($minutes > 0) {
                $timeAgo = $minutes . ' minutes ago';
            } else {
                $timeAgo = 'Just now';
            }
            $output .= '<article onclick="window.location.href =\'./view-job-listing.php?id=' . urlencode($row['id']) . '\'">
            <div class="col col-1">
                <img src="./jobBanners/' . ($row["banner_image"] ? $row["banner_image"] : 'placeholder.png') . '" alt="">
            </div>
        
            <div class="col col-2">
                <h1>' . $row["title"] . '</h1>
                <h2>' . $row["company"] . '</h2>
                <h2>' . $row["location"] . '</h2>
                <h2>' . ($row["monthly_pay"] == 0 ? "" : $row["monthly_pay"])  . '</h2>
                <h3>Closing date : ' . $row["closing_date"] . '</h3>
            </div>
            <div class="col col-3">
                <h2>' . $row["job_type"] . '</h2>
                <h3>' . $timeAgo . '</h3>
                ';
            if (isset($_SESSION['uid'])) {
                $userId = $_SESSION['uid'];
                $i = $row["id"];
                $checkQuery = "SELECT * FROM job_applications WHERE user_id = $userId AND job_id = $i";
                $checkResult = $conn->query($checkQuery);

                if ($checkResult && $checkResult->num_rows > 0) {
                    $output .= '<span class="already-applied">Already applied</span>';
                } else {
                    $output .= '
                        <button data-jobid="job_' . $row["id"] . '" onclick="openApplyModal(' . $row["id"] . ')">Apply</button>';
                }
            } else {
                $output .= '<button onclick="event.stopPropagation(); window.location.href=\'login.php\'" class="login-to-apply">Login to apply</button >';
            }

            $output .= '</div>
        </article>';
        }
    } else {
        $output = "No jobs found";
    }

    return $output;
}
function fetchTopCategoriesWithCount()
{
    global $conn;
    $query = "SELECT category, COUNT(*) AS count FROM job GROUP BY category ORDER BY count DESC LIMIT 10";
    $result = $conn->query($query);
    $html = '';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<article onclick="window.location.href =\'./job-listings.php?category=' . urlencode($row['category']) . '\'"><h1>' . htmlspecialchars($row['category']) . '</h1><h2>' . $row['count'] . '</h2></article>';
        }
    }
    return $html;
}
function fetchCategoriesWithCount()
{
    global $conn;
    $query = "SELECT category, COUNT(*) AS count FROM job GROUP BY category ORDER BY count DESC ";
    $result = $conn->query($query);
    $html = '';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<article onclick="window.location.href =\'./job-listings.php?category=' . urlencode($row['category']) . '\'"><h1>' . htmlspecialchars($row['category']) . '</h1><h2>' . $row['count'] . '</h2></article>';
        }
    }
    return $html;
}
function fetchUserAppliedJobs()
{
    $userId = $_SESSION['uid'];
    global $conn;

    $currentDate = date("Y-m-d");

    $query = "SELECT job.*, job_applications.id AS application_id, job_applications.cv, job_applications.applied_at 
              FROM job_applications 
              LEFT JOIN job ON job_applications.job_id = job.id 
              WHERE job_applications.user_id = $userId 
              ORDER BY job.closing_date DESC";

    $result = $conn->query($query);

    $output = '';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $created_at = strtotime($row["applied_at"]);
            $now = time();
            $interval = $now - $created_at;
            $days = floor($interval / (60 * 60 * 24));
            $hours = floor(($interval % (60 * 60 * 24)) / (60 * 60));
            $minutes = floor(($interval % (60 * 60)) / 60);
            if ($days > 0) {
                $timeAgo = $days . ' days ago';
            } elseif ($hours > 0) {
                $timeAgo = $hours . ' hours ago';
            } elseif ($minutes > 0) {
                $timeAgo = $minutes . ' minutes ago';
            } else {
                $timeAgo = 'Just now';
            }

            $output .= '<article class="my-jobs ';

            if (strtotime($row["closing_date"]) < strtotime($currentDate)) {
                $output .= ' expired';
            }
            $output .= '"data-job-application-id="' . $row["application_id"] . '">';

            $output .= '<div class="col col-1">';
            $output .= '<img src="./jobBanners/' . ($row["banner_image"] ? $row["banner_image"] : 'placeholder.png') . '" alt="">';
            $output .= '</div>';
            $output .= '<div class="col col-2">';
            $output .= '<h1>' . $row["title"] . '</h1>';
            $output .= '<h2>' . $row["company"] . '</h2>';
            $output .= '<h2>' . $row["location"] . '</h2>';
            $output .= '<h2>Rs.' . number_format($row["monthly_pay"], 2) . '</h2>';
            $output .= '<h3>Closing date : ' . $row["closing_date"] . '</h3>';
            $output .= '</div>';
            $output .= '<div class="col col-3">';
            $output .= '<h2>' . $row["job_type"] . '</h2>';
            $output .= '<h3>' . $timeAgo . '</h3>';
            $output .= '</div>';
            $output .= '<div class="button-wrapper">';
            $output .= "<button class='delete delete-application-btn' data-job-application-id='" . $row["application_id"] . "'>Delete</button>";
            $output .= '</div>';
            $output .= '<div class="expired-article">Closed</div>';
            $output .= '</article>';
        }
    } else {
        $output = "No jobs found";
    }

    return $output;
}
function fetchJobs()
{
    global $conn;

    $currentDate = date("Y-m-d");

    $location = isset($_GET['location']) ? $_GET['location'] : null;
    $type = isset($_GET['type']) ? $_GET['type'] : null;
    $category = isset($_GET['category']) ? $_GET['category'] : null;

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $perPage = 10;
    $startFrom = ($page - 1) * $perPage;

    $whereClause = "WHERE closing_date >= '$currentDate'";
    if ($location) {
        $whereClause .= " AND location = '$location'";
    }
    if ($type) {
        $whereClause .= " AND job_type = '$type'";
    }
    if ($category) {
        $whereClause .= " AND category = '$category'";
    }

    $query = "SELECT * FROM job $whereClause ORDER BY created_at DESC LIMIT $startFrom, $perPage";

    $result = $conn->query($query);

    $output = '';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $created_at = $row["created_at"];
            $now = time();
            $timeAgo = '';
            $interval = $now - $created_at;

            $days = floor($interval / (60 * 60 * 24));
            $hours = floor(($interval % (60 * 60 * 24)) / (60 * 60));
            $minutes = floor(($interval % (60 * 60)) / 60);

            if ($days > 0) {
                $timeAgo = $days . ' days ago';
            } elseif ($hours > 0) {
                $timeAgo = $hours . ' hours ago';
            } elseif ($minutes > 0) {
                $timeAgo = $minutes . ' minutes ago';
            } else {
                $timeAgo = 'Just now';
            }
            $output .= '<article onclick="window.location.href =\'./view-job-listing.php?id=' . urlencode($row['id']) . '\'">
            <div class="col col-1">
            <img src="./jobBanners/' . ($row["banner_image"] ? $row["banner_image"] : 'placeholder.png') . '" alt="">
            </div>
            <div class="col col-2">
                <h1>' . $row["title"] . '</h1>
                <h2>' . $row["company"] . '</h2>
                <h2>' . $row["location"] . '</h2>
                <h2>' . ($row["monthly_pay"] == 0 ? "" : $row["monthly_pay"])  . '</h2>
                <h3>Closing date : ' . $row["closing_date"] . '</h3>
            </div>
            <div class="col col-3">
                <h2>' . $row["job_type"] . '</h2>
                <h3>' . $timeAgo . '</h3>
                ';
            if (isset($_SESSION['uid'])) {
                $userId = $_SESSION['uid'];
                $i = $row["id"];
                $checkQuery = "SELECT * FROM job_applications WHERE user_id = $userId AND job_id = $i";
                $checkResult = $conn->query($checkQuery);

                if ($checkResult && $checkResult->num_rows > 0) {
                    $output .= '<span class="already-applied">Already applied</span>';
                } else {
                    $output .= '
                        <button data-jobid="job_' . $row["id"] . '" onclick="openApplyModal(' . $row["id"] . ')">Apply</button>';
                }
            } else {
                $output .= '<button onclick="event.stopPropagation(); window.location.href=\'login.php\'" class="login-to-apply">Login to apply</button >';
            }

            $output .= '</div>
        </article>';
        }

        $output .= '<div class="pagination">';
        $totalJobs = getTotalJobs($conn, $whereClause);
        $totalPages = ceil($totalJobs / $perPage);
        $showPages = 2;
        $startPage = max(1, min($page - $showPages, $totalPages - 2 * $showPages));
        $endPage = min($totalPages, $startPage + 2 * $showPages);

        if ($page > 1) {
            $output .= '<a href="?page=' . ($page - 1);
            if ($location) $output .= '&location=' . $location;
            if ($type) $output .= '&type=' . $type;
            if ($category) $output .= '&category=' . $category;
            $output .= '"><<</a>';
        }

        // Add first page
        if ($startPage > 1) {
            $output .= '<a href="?page=1';
            if ($location) $output .= '&location=' . $location;
            if ($type) $output .= '&type=' . $type;
            if ($category) $output .= '&category=' . $category;
            $output .= '">1</a>';
        }

        for ($i = $startPage; $i <= $endPage; $i++) {
            $output .= '<a href="?page=' . $i;
            if ($location) $output .= '&location=' . $location;
            if ($type) $output .= '&type=' . $type;
            if ($category) $output .= '&category=' . $category;
            $output .= '"';
            if ($page == $i) {
                $output .= ' class="active"';
            }
            $output .= '>' . $i . '</a>';
        }

        // Add last page
        if ($endPage < $totalPages) {
            $output .= '<a href="?page=' . $totalPages;
            if ($location) $output .= '&location=' . $location;
            if ($type) $output .= '&type=' . $type;
            if ($category) $output .= '&category=' . $category;
            $output .= '">' . $totalPages . '</a>';
        }

        if ($page < $totalPages) {
            $output .= '<a href="?page=' . ($page + 1);
            if ($location) $output .= '&location=' . $location;
            if ($type) $output .= '&type=' . $type;
            if ($category) $output .= '&category=' . $category;
            $output .= '">>></a>';
        }
        $output .= '</div>';
    } else {
        $output = "No jobs found";
    }

    return $output;
}

function getTotalJobs($conn, $whereClause)
{
    $totalQuery = "SELECT COUNT(*) as total FROM job $whereClause";
    $totalResult = $conn->query($totalQuery);
    return $totalResult->fetch_assoc()['total'];
}

function fetchUserJobs()
{
    $userId = $_SESSION['uid'];
    global $conn;

    $currentDate = date("Y-m-d");

    $query = "SELECT job.*, COUNT(job_applications.id) AS application_count 
              FROM job 
              LEFT JOIN job_applications ON job.id = job_applications.job_id 
              WHERE job.posted_by = $userId 
              GROUP BY job.id 
              ORDER BY job.closing_date DESC";

    $result = $conn->query($query);

    $output = '';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $created_at = $row["created_at"];
            $now = time();
            $interval = $now - $created_at;
            $days = floor($interval / (60 * 60 * 24));
            $hours = floor(($interval % (60 * 60 * 24)) / (60 * 60));
            $minutes = floor(($interval % (60 * 60)) / 60);
            if ($days > 0) {
                $timeAgo = $days . ' days ago';
            } elseif ($hours > 0) {
                $timeAgo = $hours . ' hours ago';
            } elseif ($minutes > 0) {
                $timeAgo = $minutes . ' minutes ago';
            } else {
                $timeAgo = 'Just now';
            }

            $output .= '<article class="my-jobs';

            // Add conditional class based on closing date
            if (strtotime($row["closing_date"]) < strtotime($currentDate)) {
                $output .= ' expired';
            }

            $output .= '" data-job-id="' . $row["id"] . '" >';

            $output .= '<div class="col col-1">';
            $output .= '<img src="./jobBanners/' . ($row["banner_image"] ? $row["banner_image"] : 'placeholder.png') . '" alt="">';
            $output .= '</div>';
            $output .= '<div class="col col-2">';
            $output .= '<h1>' . $row["title"] . '</h1>';
            $output .= '<h2>' . $row["company"] . '</h2>';
            $output .= '<h2>' . $row["location"] . '</h2>';
            $output .= '<h2>Rs.' . number_format($row["monthly_pay"], 2) . '</h2>';
            $output .= '<h3>Closing date : ' . $row["closing_date"] . '</h3>';
            $output .= '</div>';
            $output .= '<div class="col col-3">';
            $output .= '<h2>' . $row["job_type"] . '</h2>';
            $output .= '<h3>' . $timeAgo . '</h3>';
            $output .= '<h3>' . $row["application_count"] . ' applications</h3>';
            $output .= '</div>';
            $output .= '<div class="button-wrapper">';
            $output .= "<button class='applications' onclick=\"location.href='job-applications.php?job_id=" . $row["id"] . "'\">Applications</button>";
            $output .= "<button class='edit-btn' onclick=\"location.href='edit-job-lisitng.php?id=" . $row["id"] . "'\">Edit</button>";
            $output .= "<button data-job-id='" . $row["id"] . "' class='delete-btn'>Delete</button>";
            $output .= '</div>';
            $output .= '<div class="expired-article">Closed</div>';
            $output .= '</article>';
        }
    } else {
        $output = "No jobs found";
    }

    return $output;
}

function fetchRelatedJobs($category, $id)
{
    global $conn;

    $currentDate = date("Y-m-d");

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $perPage = 6;
    $startFrom = ($page - 1) * $perPage;

    $whereClause = "WHERE closing_date >= '$currentDate'";
    if ($category) {
        $whereClause .= " AND category = '$category'";
    }

    $query = "SELECT * FROM job $whereClause ORDER BY created_at DESC LIMIT $startFrom, $perPage";

    $result = $conn->query($query);

    $output = '';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            if ($row["id"] == $id) {
                continue;
            }

            $created_at = $row["created_at"];
            $now = time();
            $timeAgo = '';
            $interval = $now - $created_at;

            $days = floor($interval / (60 * 60 * 24));
            $hours = floor(($interval % (60 * 60 * 24)) / (60 * 60));
            $minutes = floor(($interval % (60 * 60)) / 60);

            if ($days > 0) {
                $timeAgo = $days . ' days ago';
            } elseif ($hours > 0) {
                $timeAgo = $hours . ' hours ago';
            } elseif ($minutes > 0) {
                $timeAgo = $minutes . ' minutes ago';
            } else {
                $timeAgo = 'Just now';
            }
            $output .= '<article onclick="window.location.href =\'./view-job-listing.php?id=' . urlencode($row['id']) . '\'">
            <div class="col col-1">
            <img src="./jobBanners/' . ($row["banner_image"] ? $row["banner_image"] : 'placeholder.png') . '" alt="">
            </div>
            <div class="col col-2">
                <h1>' . $row["title"] . '</h1>
                <h2>' . $row["company"] . '</h2>
                <h2>' . $row["location"] . '</h2>
                <h2>' . $row["monthly_pay"] . '</h2>
                <h3>Closing date : ' . $row["closing_date"] . '</h3>
            </div>
            <div class="col col-3">
                <h2>' . $row["job_type"] . '</h2>
                <h3>' . $timeAgo . '</h3>
                ';
            if (isset($_SESSION['uid'])) {
                $userId = $_SESSION['uid'];
                $i = $row["id"];
                $checkQuery = "SELECT * FROM job_applications WHERE user_id = $userId AND job_id = $i";
                $checkResult = $conn->query($checkQuery);

                if ($checkResult && $checkResult->num_rows > 0) {
                    $output .= '<span class="already-applied">Already applied</span>';
                } else {
                    $output .= '
                        <button data-jobid="job_' . $row["id"] . '" onclick="openApplyModal(' . $row["id"] . ')">Apply</button>';
                }
            } else {
                $output .= '<button onclick="window.location.href=\'login.php\'" class="login-to-apply">Login to apply</button >';
            }

            $output .= '</div>
        </article>';
        }
    } else {
        $output = "No jobs found";
    }

    return $output;
}
