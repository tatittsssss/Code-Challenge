$(document).ready(function() {
    $('#image').on('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result).show();
            };
            reader.readAsDataURL(file);
        } else {
            $('#imagePreview').hide();
        }
    });

    $("#signup").on("click", function(e) {
        e.preventDefault();
        var name = $("#name").val();
        var address = $("#address").val();
        var age = $("#age").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var imageFile = $('#image')[0].files[0];

        if (!name || !address || !age || !email || !password || !imageFile) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill all the fields and choose an image!',
            });
        } else {
            var formData = new FormData();
            formData.append('name', name);
            formData.append('address', address);
            formData.append('age', age);
            formData.append('email', email);
            formData.append('password', password);
            formData.append('image', imageFile);
            formData.append('_token', $("#token").val());

            $.ajax({
                url: 'signup',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#signup").html("Adding...");
                    $("#signup").prop("disabled", true);
                },
                success: function(response) {
                    $("#signup").html("Sign Up");
                    $("#signup").prop("disabled", false);
                    if (response.message == 'success') {
                        Swal.fire('Success!', 'You have signed up successfully!', 'success');
                        // window.location.href = 'login';
                    }
                },
                error: function(xhr, status, error) {
                    $("#signup").html("Sign Up");
                    $("#signup").prop("disabled", false);
                    console.log(xhr.responseText);
                }
            });
        }
    });
});

