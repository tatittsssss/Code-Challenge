$(document).ready(function(){
    $("#login").on("click", function(e) {
        e.preventDefault();

        // alert('click');
        var email = $("#email").val();
        var password = $("#password").val();

        if (email == "" || password == "") {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Empty email or password!"
            });
        } else {
            $.ajax({
                url: 'login',
                type: 'POST',
                data: {
                    email: email,
                    password: password,
                    _token: $("#token").val()
                },
                cache: false,
                beforeSend: function() {
                    $("#login").html("Logging in...");
                    $("#login").prop("disabled", true);
                },
                success: function(response) {
                    $("#login").html("Logged in");
                    $("#login").prop("disabled", false);
                    console.log(response);
                    if (response.message == "success") {
                        window.location.href = "dashboard";
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
});

$("#signup").on("click", function() {
    window.location.href = "register";
});
