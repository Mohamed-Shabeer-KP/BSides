<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- Bootstrap CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/animate.css">

  <link rel="stylesheet" href="/css/registration.css">

  <title>Registration</title>
</head>

<body>

  <!-- Register start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>

            <form name="register" class="form-signin" action="registrationValidation.php" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputUserame" name="inputUserame" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Name</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmailConfirm" class="form-control" placeholder="Email address" required>
                <label for="inputEmailConfirm">Confirm email address</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="phoneNumber" class="form-control" placeholder="Phone Number" maxlength="12" minlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                <label for="phoneNumber">Phone Number</label>
              </div>

              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" minlength="5" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" minlength="5" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" onclick="return validate()">Register</button>
              <!-- Not needed
                  <a class="d-block text-center mt-2 small" href="#">Sign In</a>
                  <hr class="my-4">

                 
                  <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
                  <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
                    -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register stop -->
  <!-- Optional JavaScript -->

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
  
  <script src="/js/registrationValidation.js"></script>

  <script src="/js/bootbox.min.js"></script>
  <script src="/js/bootbox.locales.min.js"></script>
</body>

</html>