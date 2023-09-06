<?php $path_assets = "../assets/";
$path_pages = "../pages/";
$title = "Rekisteröintilomake";
$bootstrap = true;
$js = "rekisteroitymislomake.js";
$path = "../components/";include $path . "header.php";?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="registrationForm" method="post" onsubmit="return validateForm()" novalidate>
                <h2 class="mb-4 text-center">Registration Form</h2>
                <div class="form-group row mb-3">
                    <div class="col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="fname" name="firstName"
                            placeholder="Enter your first name" onchange="validate('fname')" required>
                        <div class=" invalid-feedback" id="fname_error_field">
                            Please provide your first name.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lastName"
                            placeholder="Enter your last name" onchange="validate('lname')" required>
                        <div class="invalid-feedback" id="lname_error_field">
                            Please provide your last name.
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-md-6">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" onchange="validate('email')"
                            placeholder="Enter your email" required>
                        <div class="invalid-feedback" id="email_error_field">
                            Please provide a valid email address.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" onchange="validate('phone')"
                            placeholder="Enter your phone number" required>
                        <div class="invalid-feedback" id="phone_error_field">
                            Please provide a valid phone number.
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="pass" name="password" onchange="validate('pass')"
                        placeholder="Enter your password" required>
                    <div class="invalid-feedback" id="pass_error_field">
                        Please provide a password.
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpass" onchange="validate('cpass')"
                        name="confirmPassword" placeholder="Confirm your password" required>
                    <div class="invalid-feedback" id="cpass_error_field">
                        Please confirm your password.
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary align-center">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!--container end.//-->
<?php include $path . "footer.php";?>