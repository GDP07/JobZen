if (document.getElementById('registrationForm')) {
    document.getElementById('registrationForm').addEventListener('submit', function (e) {
        e.preventDefault();
        var userName = document.getElementById('userName').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        if (password !== confirmPassword) {
            showAlert("warning", "Passwords do not match");
            return;
        }

        var xhr = new XMLHttpRequest();
        xhr.open('POST', './controllers/register.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    if (data.status === "success") {
                        showAlert("success", data.message);
                        var inputs = document.querySelectorAll('#registrationForm input, #registrationForm button');
                        inputs.forEach(function (input) {
                            input.disabled = true;
                        });

                        setTimeout(function () {
                            window.location.href = 'index.php';
                        }, 3000);

                    } else {
                        showAlert("warning", data.message);
                    }
                } else {
                    showAlert("warning", "Something went wrong :(");
                    console.error(xhr.statusText);
                }
            }
        };
        var formData = 'userName=' + encodeURIComponent(userName) + '&password=' + encodeURIComponent(password);
        xhr.send(formData);
    });
}


if (document.getElementById('loginForm')) {
    document.getElementById('loginForm').addEventListener('submit', function (e) {
        e.preventDefault();
        var userName = document.getElementById('userName').value;
        var password = document.getElementById('password').value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', './controllers/login.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    if (data.status === "success") {
                        showAlert("success", data.message);
                        var inputs = document.querySelectorAll('#loginForm input, #loginForm button');
                        inputs.forEach(function (input) {
                            input.disabled = true;
                        });

                        setTimeout(function () {
                            window.location.href = 'index.php';
                        }, 3000);

                    } else {
                        showAlert("warning", data.message);
                    }
                } else {
                    showAlert("warning", "Something went wrong :(");
                    console.error(xhr.statusText);
                }
            }
        };
        var formData = 'userName=' + encodeURIComponent(userName) + '&password=' + encodeURIComponent(password);
        xhr.send(formData);
    });
}

if (document.getElementById('createJobListing')) {
    document.getElementById('createJobListing').addEventListener('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', './controllers/create-job.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    showAlert("success", xhr.responseText);
                    document.getElementById('createJobListing').reset();
                    document.querySelectorAll('.show-image').forEach(function (element) {
                        element.style.display = 'none';
                    });
                    document.documentElement.scrollTop = 0;
                    document.body.scrollTop = 0;
                } else {
                    console.error(xhr.statusText);
                }
            }
        };
        xhr.send(formData);
    });
}


if (document.getElementById('submitApplication')) {
    document.getElementById('submitApplication').addEventListener('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', './controllers/submit-application.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        showAlert("success", "Application submitted successfully!");
                        document.getElementById('submitApplication').reset();
                        var button = document.querySelector('button[data-jobid="job_' + response.jobId + '"]');
                        if (button) {
                            var span = document.createElement('span');
                            span.classList.add('already-applied');
                            span.innerText = 'Already applied';
                            button.parentNode.replaceChild(span, button);
                        }

                        closeApplyModal();
                    } else {
                        showAlert("warning", "Failed to submit application!");
                        console.log(response.message);
                    }
                } else {
                    alert('Error occurred while submitting application. Please try again later.');
                }
            }
        };
        xhr.send(formData);
    });
}

if (document.getElementsByClassName('mark-seen-btn')) {
    document.addEventListener('click', function (event) {
        if (event.target && event.target.classList.contains('mark-seen-btn')) {
            var applicationId = event.target.dataset.id;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', './controllers/mark-as-seen.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = xhr.responseText;
                        document.querySelector('article[data-job-application-id="' + applicationId + '"]').classList.add('seen');
                        var markUnseenBtn = document.createElement('button');
                        markUnseenBtn.classList.add('seen', 'mark-unseen-btn');
                        markUnseenBtn.dataset.id = applicationId;
                        markUnseenBtn.textContent = 'Mark as unseen';
                        event.target.parentNode.replaceChild(markUnseenBtn, event.target);
                    } else {
                        console.error('Error occurred while marking as seen: ' + xhr.statusText);
                    }
                }
            };
            xhr.send('id=' + encodeURIComponent(applicationId));
        }
    });

}

if (document.getElementsByClassName('mark-unseen-btn')) {
    document.addEventListener('click', function (event) {
        if (event.target && event.target.classList.contains('mark-unseen-btn')) {
            var applicationId = event.target.dataset.id;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', './controllers/mark-as-unseen.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = xhr.responseText;
                        document.querySelector('article[data-job-application-id="' + applicationId + '"]').classList.remove('seen');
                        var markSeenBtn = document.createElement('button');
                        markSeenBtn.classList.add('seen', 'mark-seen-btn');
                        markSeenBtn.dataset.id = applicationId;
                        markSeenBtn.textContent = 'Mark as seen';
                        event.target.parentNode.replaceChild(markSeenBtn, event.target);
                    } else {
                        console.error('Error occurred while marking as unseen: ' + xhr.statusText);
                    }
                }
            };
            xhr.send('id=' + encodeURIComponent(applicationId));
        }
    });
}

if (document.getElementsByClassName('delete-application-btn')) {
    document.addEventListener('click', function (event) {
        if (event.target && event.target.classList.contains('delete-application-btn')) {
            // Ask for confirmation
            if (confirm("Are you sure you want to delete this application?")) {
                var applicationId = event.target.dataset.jobApplicationId;
                var xhr = new XMLHttpRequest();
                xhr.open('POST', './controllers/delete-application.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            var response = xhr.responseText;
                            if (response === "Application deleted successfully") {
                                var article = document.querySelector('article[data-job-application-id="' + applicationId + '"]');
                                if (article) {
                                    article.parentNode.removeChild(article);
                                }
                                showAlert("success", "Application deleted successfully!");
                            } else {
                                console.error(response);
                                showAlert("warning", "Failed to delete application!");
                            }
                        } else {
                            console.error('An error occurred:', xhr.statusText);
                        }
                    }
                };
                xhr.send('id=' + encodeURIComponent(applicationId));
            }
        }
    });
}

if (document.getElementById('updateJobListing')) {
    document.getElementById('updateJobListing').addEventListener('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', './controllers/update-job.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    showAlert("success", "Job listing updated!");
                    setTimeout(function () {
                        window.scrollTo(0, 0);
                        window.location.reload();
                    }, 1000);
                } else {
                    console.log("Error: " + xhr.statusText);
                }
            }
        };
        xhr.send(formData);
    });
}

if (document.getElementsByClassName('delete-btn')) {
    document.addEventListener("click", function (event) {
        if (event.target && event.target.classList.contains("delete-btn")) {
            var jobId = event.target.getAttribute("data-job-id");
            if (confirm("Are you sure you want to delete this job listing and all its applications?")) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "./controllers/delete-job.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                var elements = document.querySelectorAll(".my-jobs[data-job-id='" + jobId + "']");
                                elements.forEach(function (element) {
                                    element.parentNode.removeChild(element);
                                });
                                showAlert("success", "Job listing and its applications deleted successfully.");
                            } else {
                                console.log(response);
                                showAlert("warning", "Failed to delete job listing and its applications.");
                            }
                        } else {
                            console.error("Error occurred while deleting job listing and its applications: " + xhr.statusText);
                        }
                    }
                };
                xhr.send("jobId=" + encodeURIComponent(jobId));
            }
        }
    });
}

if (document.getElementById('changePassword')) {
    document.getElementById('changePassword').addEventListener('submit', function (e) {
        e.preventDefault();

        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        if (password == '') {
            showAlert('warning', 'Passwords cannot be empty!');
            return;
        }

        if (password !== confirmPassword) {
            showAlert('warning', 'Passwords do not match!');
            return;
        }

        var formData = new FormData(this);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', './controllers/password-update.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    if (data.success) {
                        showAlert("success", "Password updated successfully!.");
                        document.getElementById('password').value = '';
                        document.getElementById('confirmPassword').value = '';
                    } else {
                        showAlert("warning", "Password update failed!.");
                    }
                } else {
                    showAlert("warning", xhr.statusText);
                }
            }
        };
        xhr.send(formData);
    });
}