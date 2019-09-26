<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
   <!--Made with love by ABHISHEK AND NITYANAND -->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
  .t1{
    height: 510px !important;
  }
</style>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card t1">
      <div class="card-header">
        <h3>CREATE AN ACCOUNT</h3>
      <div class="card-body">
        <form action="insertion.php" method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="customer name" required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="text" name="address" class="form-control" placeholder="customer address" required>
          </div>
           <div class="input-group form-group">
            
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="pin" class="form-control" placeholder="enter pin-number" pattern="^ [0-9]{4}+$" title="Contains digit of length 4 or greater than 4" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="number" name="balance" class="form-control" placeholder="initial deposit" min="500" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="tel" name="phone" class="form-control" placeholder="phone number" required>
          </div>
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <label class="text-white bg-dark">Account-type:-</label>
            <select name="accounttype">
              <option value="fixed-deposit">Saving</option>
              <option value="credit">Current</option>
            </select> 
            
          </div>

          <div class="form-group text-center">
            <input type="submit" value="Register" name="submit" class="btn float-center login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links ">
          Already! have an account?<a href="login.php" style="text-decoration: none;"><b>LOGIN</b></a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>