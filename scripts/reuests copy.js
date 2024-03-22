$(document).ready(function () {

    $('#registrationForm').submit(function (e) {
        e.preventDefault();
        var userName = $('#userName').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();

        if (password !== confirmPassword) {
            showAlert("warning", "Passwords do not match")
            return;
        }

        $.ajax({
            type: 'POST',
            url: './controllers/register.php',
            data: {
                userName: userName,
                password: password
            },
            success: function (response) {
                var data = JSON.parse(response);
                if (data.status === "success") {
                    showAlert("success", data.message);
                    $('#registrationForm input, #registrationForm button').attr('disabled', true);

                    setTimeout(function () {
                        window.location.href = 'index.php';
                    }, 3000);

                } else {
                    showAlert("warning", data.message);
                }
            },
            error: function (xhr, status, error) {
                showAlert("warning", "Something went wrong :(.");
                console.log(error);
            }
        });
    });

    $('#loginForm').submit(function (e) {
        e.preventDefault();
        var userName = $('#userName').val();
        var password = $('#password').val();

        $.ajax({
            type: 'POST',
            url: './controllers/login.php',
            data: {
                userName: userName,
                password: password
            },
            success: function (response) {
                var data = JSON.parse(response);
                if (data.status === "success") {
                    showAlert("success", data.message);
                    $('#loginForm input, #loginForm button').attr('disabled', true);

                    setTimeout(function () {
                        window.location.href = 'index.php';
                    }, 3000);

                } else {
                    showAlert("warning", data.message);
                }
            },
            error: function (xhr, status, error) {
                showAlert("warning", "Something went wrong :(.");
                console.log(error);
            }
        });
    });

    $('#createJobListing').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: './controllers/create-job.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                showAlert("success", response);
                $('#createJobListing')[0].reset();
                $('.show-image').hide();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                console.log(response);
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });
    });

    $('#submitApplication').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: './controllers/submit-application.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    showAlert("success", "Application submitted successfully!");
                    $('#submitApplication')[0].reset();
                    $('button[data-jobid="job_' + response.jobId + '"]').replaceWith('<span class="already-applied">Already applied</span>');

                    closeApplyModal();
                } else {
                    showAlert("warning", "Failed to submit application!");
                    console.log(response.message);
                }
            },
            error: function (xhr, status, error) {
                alert('Error occurred while submitting application: ' + error);
            }
        });
    });

    $(document).on('click', '.mark-seen-btn', function () {
        var applicationId = $(this).data('id');
        $.ajax({
            url: './controllers/mark-as-seen.php',
            type: 'POST',
            data: { id: applicationId },
            success: function (response) {
                $('article[data-job-application-id="' + applicationId + '"]').addClass('seen');
                $('.mark-seen-btn[data-id="' + applicationId + '"]').replaceWith('<button class="seen mark-unseen-btn" data-id="' + applicationId + '">Mark as unseen</button>');
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });

    $(document).on('click', '.mark-unseen-btn', function () {
        var applicationId = $(this).data('id');
        $.ajax({
            url: './controllers/mark-as-unseen.php',
            type: 'POST',
            data: { id: applicationId },
            success: function (response) {
                $('article[data-job-application-id="' + applicationId + '"]').removeClass('seen');
                $('.mark-unseen-btn[data-id="' + applicationId + '"]').replaceWith('<button class="seen mark-seen-btn" data-id="' + applicationId + '">Mark as seen</button>');
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });

    $(document).on('click', '.delete-application-btn', function () {
        var applicationId = $(this).data('job-application-id');
        $.ajax({
            url: './controllers/delete-application.php',
            type: 'POST',
            data: { id: applicationId },
            success: function (response) {
                if (response === "Application deleted successfully") {
                    $('article[data-job-application-id="' + applicationId + '"]').remove();
                    showAlert("success", "Application deleted successfully!");
                } else {
                    console.log(response);
                    showAlert("warning", "Failed to delete application!");
                }
            },
            error: function (xhr, status, error) {
                console.error('An error occurred:', error);
            }
        });
    });

    $('#updateJobListing').submit(function (e) {
        e.preventDefault();
        var formData = new FormData($(this)[0]);

        $.ajax({
            url: './controllers/update-job.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                showAlert("success", "Job lisitng updated!");
                setTimeout(function () {
                    window.scrollTo(0, 0);
                    window.location.reload();
                }, 1000);
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            }
        });
    });

    $(document).on("click", ".delete-btn", function () {
        var jobId = $(this).data("job-id");
        if (confirm("Are you sure you want to delete this job listing and all its applications?")) {
            $.ajax({
                type: "POST",
                url: "./controllers/delete-job.php",
                data: { jobId: jobId },
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        $(".my-jobs[data-job-id='" + jobId + "']").remove();
                        showAlert("success", "Job listing and its applications deleted successfully.");
                    } else {
                        console.log(response);
                        showAlert("warning", "Failed to delete job listing and its applications.");
                    }
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });

    $(document).on("click", ".delete-job-application", function () {
        var jobId = $(this).data("job-id");
        if (confirm("Are you sure you want to delete this job application?")) {
            $.ajax({
                type: "POST",
                url: "./controllers/delete-my-job-application.php",
                data: { id: jobId },
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        $(".my-jobs[data-job-id='" + jobId + "']").remove();
                        showAlert("success", "Job application deleted successfully.");
                    } else {
                        console.log(response);
                        showAlert("warning", "Failed to delete job application.");
                    }
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });
});