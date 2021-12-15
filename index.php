<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 5000);
</script>
    <title>Pertanahan</title>
    
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('./assets/images/3.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert alert-danger' role='alert'>Username & Password Salah !!</div>";
		}
    elseif($_GET['pesan']=="belum_login"){
			echo "<div class='alert alert-danger' role='alert'>Anda Belum Melakukan Login !!</div>";
		}
    elseif($_GET['pesan']=="logout"){
			echo"<div class='alert alert-success' role='alert'>LogOut Berhasil</div>";
		}
	}
	?>
              <h3>Login to <strong>Pertanahan</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="./sistem/login.php" method="post">
                <div class="form-group first">
                  
                  <label for="username">Username</label>
                  <input type="text"   name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password"  name="password" class="form-control" placeholder="Password"  required>
                </div>
               <br><br>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>