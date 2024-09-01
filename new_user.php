
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
 
    
    <form action="login2.php" method="post" class="text-center">
        
        <!-- <div class= "table text-center ps-3 pe-9 mx-auto">
            <h1>New User</h1>
            <div class="row mb-2 ps-15" >
          <label for="name" class="col-sm-4 col-form-label">Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="name">
          </div>
        </div>


          <div class="row mb-2 ps-15" >
            <label for="City" class="col-sm-4 col-form-label">City</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="City">
            </div>
        </div> -->
        <div class="row mb-2 ps-15" >
          <label for="username" class="col-sm-4 col-form-label">Username</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="username" name="username">
          </div>
        </div>
        <div class="row mb-3 ps-15 ">
          <label for="password" class="col-sm-4 col-form-label">Password</label>
          
          <div class="col-sm-4">
            <input type="password" class="form-control" id="password" name="password">
            
            
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
              <!-- <input class="form-check-input " type="checkbox" id="gridCheck1">
              <label class="form-check-label " for="gridCheck1">I'm Human
              </label> -->
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary ">Create account</button>
        <!-- <button class="btn  text-primary"><a href="#">Forgot password</a> </button>
        <br>
        <button class="btn  text-primary"><a href="new_user.html">New User</a> </button>
        <button class="btn  text-primary"><a href="login.html">login</a></button> -->
    </div>
      </form>
</body>
</html>