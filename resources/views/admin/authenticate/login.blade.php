@extends('layouts.authenticate')

@section('title')
	<title>Admin | Login</title>
@endsection

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="form">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div id="alert"></div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-80">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="/admin/register">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script>
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
                url: "/api/login",
                type: "post",
                data: serializedData
            });
    
            var fail =
            '<div class="alert alert-warning" id="fail">' +
                '<strong>Wrong email or password!Try again or sign up</strong>' +
            '</div>';
			// Callback handler that will be called on success
			
			request
			.then(function(response){
				window.location.href = "/admin/dashboard?api_token="+response.data.api_token;
			},
			function(error){
				$('#alert').html(fail);
			});
			
            request.always(function () {
                // Reenable the inputs
                $inputs.prop("disabled", false);
            });

        });
	</script>
@endsection