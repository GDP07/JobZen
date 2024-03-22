if (document.querySelectorAll('.with-drop-down')) {
    document.querySelectorAll('.with-drop-down').forEach(function (element) {
        const inputField = element.querySelector('.dynamic-dropdown');
        const dropDown = element.querySelector('.drop-down-data');
        const dropDownItems = dropDown.querySelectorAll('li');
        const clearButton = element.querySelector('.clearButton');

        inputField.addEventListener('focus', function () {
            dropDown.style.display = 'block';
        });

        document.addEventListener('click', function (event) {
            if (!event.target.closest('.with-drop-down')) {
                dropDown.style.display = 'none';
                filterDropDownOptions("");
            }
        });

        dropDownItems.forEach(function (item) {
            item.addEventListener('click', function () {
                inputField.value = item.textContent;
                inputField.readOnly = true;
                clearButton.style.display = 'block';
                dropDown.style.display = 'none';
            });
        });

        clearButton.addEventListener('click', function () {
            inputField.value = '';
            inputField.readOnly = false;
            filterDropDownOptions("");
            clearButton.style.display = 'none';
        });

        inputField.addEventListener('input', function () {
            const inputValue = inputField.value.trim();
            if (inputValue) {
                dropDown.style.display = 'block';
                filterDropDownOptions(inputValue);
                clearButton.style.display = 'block';
            } else {
                dropDown.style.display = 'block';
                clearButton.style.display = 'none';
            }
        });

        function filterDropDownOptions(inputValue) {
            dropDownItems.forEach(function (item) {
                const text = item.textContent.toLowerCase();
                if (text.includes(inputValue.toLowerCase())) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    });
}

if (document.getElementById('bannerImage')) {
    document.getElementById('bannerImage').addEventListener('change', function () {
        var file = this.files[0];
        var img = document.getElementById('previewImage');
        var showImage = document.querySelector('.show-image');

        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                img.src = e.target.result;
                showImage.style.display = 'block';
            };

            reader.readAsDataURL(file);
        }
    });
}

if (document.getElementById('bannerUpdateImage')) {
    document.getElementById('bannerUpdateImage').addEventListener('change', function () {
        var file = this.files[0];
        var img = document.getElementById('previewImage');

        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                img.src = e.target.result;
                document.querySelector('.show-image').style.display = 'block';
            };

            reader.readAsDataURL(file);
        }

        var imageNotEmptyInput = document.getElementById('imageNotEmpty');
        var removedImageInput = document.getElementById('removedImage');

        if (imageNotEmptyInput.value !== '') {
            removedImageInput.value = imageNotEmptyInput.value;
            imageNotEmptyInput.value = '';
        }
    });
}

if (document.getElementById('clearImageBtn')) {
    document.getElementById('clearImageBtn').addEventListener('click', function () {

        var showImage = document.querySelector('.show-image');
        if (showImage) {
            showImage.style.display = 'none';
        }
    });
}

if (document.getElementById('clearImageUpdateBtn')) {
    document.getElementById('clearImageUpdateBtn').addEventListener('click', function () {

        var imageNotEmptyInput = document.getElementById('imageNotEmpty');
        var removedImageInput = document.getElementById('removedImage');

        if (imageNotEmptyInput.value !== '') {
            removedImageInput.value = imageNotEmptyInput.value;
            imageNotEmptyInput.value = '';
        }

        var showImage = document.querySelector('.show-image');
        if (showImage) {
            showImage.style.display = 'none';
        }
    });
}

if (document.querySelectorAll('.open-nav')) {
    document.querySelectorAll('.open-nav').forEach(function (element) {
        element.addEventListener('click', function () {
            var navigation = document.querySelector('.navigation');
            navigation.classList.toggle('hide-menu');
            document.body.classList.add('modal-open');
        });
    });
}

if (document.querySelectorAll('.close-nav')) {
    document.querySelectorAll('.close-nav').forEach(function (element) {
        element.addEventListener('click', function () {
            var navigation = document.querySelector('.navigation');
            navigation.classList.toggle('hide-menu');
            document.body.classList.remove('modal-open');
        });
    });

}

function showAlert(className, message) {
    var alertDiv = document.createElement('div');
    alertDiv.className = 'alert ' + className;
    alertDiv.textContent = message;

    var alertWrapper = document.querySelector('.alert-wrapper');
    alertWrapper.appendChild(alertDiv);

    setTimeout(function () {
        alertDiv.parentNode.removeChild(alertDiv);
    }, 3000);
}


function openApplyModal(id) {
    event.stopPropagation();
    var modal = document.querySelector('.application-modal');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
    document.querySelector("input[name='jobId']").value = id;
}


function closeApplyModal() {
    var modal = document.querySelector('.application-modal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}


function validateFileSize(input, maxSize) {
    if (input.files[0].size > maxSize) {
        showAlert('warning', 'File size should not exceed 10MB.');
        input.value = '';
    }
}