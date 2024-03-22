$(document).ready(function () {
    $('.with-drop-down').each(function () {
        const $inputField = $(this).find('.dynamic-dropdown');
        const $dropDown = $(this).find('.drop-down-data');
        const $dropDownItems = $dropDown.find('li');
        const $clearButton = $(this).find('.clearButton');

        $inputField.on('focus', function () {
            $dropDown.show();
        });

        $(document).on('click', function (event) {
            if (!$(event.target).closest('.with-drop-down').length) {
                $dropDown.hide();
                filterDropDownOptions("");
            }
        });

        $dropDownItems.on('click', function () {
            $inputField.val($(this).text());
            $inputField.prop('readonly', true);
            $clearButton.show();
            $dropDown.hide();
        });

        $clearButton.on('click', function () {
            $inputField.val('');
            $inputField.prop('readonly', false);
            filterDropDownOptions("");
            $clearButton.hide();
        });

        $inputField.on('input', function () {
            const inputValue = $(this).val().trim();
            if (inputValue) {
                $dropDown.show();
                filterDropDownOptions(inputValue);
                $clearButton.show();
            } else {
                $dropDown.show();
                $clearButton.hide();
            }
        });

        function filterDropDownOptions(inputValue) {
            $dropDownItems.each(function () {
                const text = $(this).text().toLowerCase();
                if (text.includes(inputValue.toLowerCase())) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });

    $('#bannerImage').change(function () {
        var file = this.files[0];
        var img = $('#previewImage');

        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                img.attr('src', e.target.result);
                $('.show-image').show();
            }

            reader.readAsDataURL(file);
        }
    });

    $('#bannerUpdateImage').change(function () {
        var file = this.files[0];
        var img = $('#previewImage');

        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                img.attr('src', e.target.result);
                $('.show-image').show();
            }

            reader.readAsDataURL(file);
        }
        if ($('#imageNotEmpty').val() !== '') {
            $('#removedImage').val($('#imageNotEmpty').val());
            $('#imageNotEmpty').val('');
            $('')
        }
    });

    $('#clearImageBtn').click(function () {
        var input = $('#bannerImage');
        input.val('');
        $('.show-image').hide();
    });

    $('#clearImageUpdateBtn').click(function () {
        var input = $('#bannerImage');
        input.val('');

        if ($('#imageNotEmpty').val() !== '') {
            $('#removedImage').val($('#imageNotEmpty').val());
            $('#imageNotEmpty').val('');
        }

        $('.show-image').hide();
    });

    $('.open-nav').click(function () {
        $('.navigation').toggleClass('hide-menu');
        $('body').addClass('modal-open');
    });

    $('.close-nav').click(function () {
        $('.navigation').toggleClass('hide-menu');
        $('body').removeClass('modal-open');
    });


});


function showAlert(className, message) {
    var alertDiv = $('<div>').addClass('alert ' + className).text(message);
    $('.alert-wrapper').append(alertDiv);

    setTimeout(function () {
        alertDiv.remove();
    }, 3000);
}

function openApplyModal(id) {
    $(".application-modal").css("display", "flex");
    $("body").css("overflow", "hidden");
    $("input[name='jobId']").val(id);
}

function closeApplyModal() {
    $(".application-modal").css("display", "none");
    $("body").css("overflow", "auto");
}

function validateFileSize(input, maxSize) {
    if (input.files[0].size > maxSize) {
        showAlert('warning', 'File size should not exceed 10MB.')
        input.value = '';
    }
}