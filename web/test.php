<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My page</title>

    <!-- CSS dependencies -->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>

    <p>Content here. <a class="show-alert" href=#>Alert!</a></p>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



    <!-- bootbox code -->
    <script src="js/bootbox.min.js"></script>
    <script src="js/bootbox.locales.min.js"></script>
    <script>
        
            bootbox.dialog({ 
                title: 'Alert',
                message: '<div class="alert alert-danger" role="alert"> This is a danger alert with <b> HEEHA </b> Give it a click if you like.</div>', 
                closeButton: 'true',
                onEscape :'true',
                className: 'shake animated'
                })
            
    </script>
</body>
</html>