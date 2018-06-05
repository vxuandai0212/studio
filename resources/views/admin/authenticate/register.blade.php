@extends('layouts.authenticate')

@section('title')
	<title>Admin | Register</title>
@endsection

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="form">
					<span class="login100-form-title p-b-15">
						Welcome
					</span>
					<span class="login100-form-title p-b-30">
						<i class="zmdi zmdi-font"></i>
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid username is: a@b.c">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input id="password" class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Confirm password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input id="confirm_password" class="input100" type="password" name="password_confirmation">
						<span class="focus-input100" data-placeholder="Confirm password"></span>
					</div>
                    <div id="alert"></div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-10">
						<span class="txt1">
							Already had an account?
						</span>

						<a class="txt2" href="/admin/login">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script>
        var password = document.getElementById("password"),
        confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

		// Variable to hold request
        var request;

        // Bind to the submit event of our form
        $("#form").submit(function(event){

            // Prevent default posting of form - put here to work in case of errors
            event.preventDefault();

            // Abort any pending request
            if (request) {
                request.abort();
            }
            // setup some local variables
            var $form = $(this);

            // Let's select and cache all the fields
            var $inputs = $form.find("input, button, textarea");

            // Serialize the data in the form
            var serializedData = $form.serialize();

            // Let's disable the inputs for the duration of the Ajax request.
            // Note: we disable elements AFTER the form data has been serialized.
            // Disabled form elements will not be serialized.
            $inputs.prop("disabled", true);

            // Fire off the request to /form.php
            request = $.ajax({
                url: "/api/register",
                type: "post",
                data: serializedData
            });
            var success = 
            '<div class="alert alert-success" id="success">' +
                '<strong>Success to register an account!</strong>' +
            '</div>';
            var fail =
            '<div class="alert alert-warning" id="fail">' +
                '<strong>Fail to register an account!</strong>' +
            '</div>';
            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR){
                $('#alert').html(success);
            });

            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown){
                $('#alert').html(fail);
            });

            // Callback handler that will be called regardless
            // if the request failed or succeeded
            request.always(function () {
                // Reenable the inputs
                $inputs.prop("disabled", false);
            });

        });
	</script>
@endsection
