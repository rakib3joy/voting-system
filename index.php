<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP voting system</title>
    
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body class = "bg-secondary">
    <h1 class = "text-dark text-center p-3"> Voting System </h1>
    <div class = "bg-success py-4">
        <h2 class = "text-center">Login</h2>
        <div class = "container text-center">
            <form action = ""> 
               <div class="mb-3">
                  <input type="text" class ="form-control w-50 m-auto" 
                  name = "username" placeholder = "Enter your username" required = "required">
               </div>
               <div class="mb-3">
                  <input type="text" class ="form-control w-50 m-auto" 
                  name = "mobile" placeholder = "Enter your mobile number" required = "required" maxLength="11" minLength="11">
               </div> 
               <div class="mb-3">
                  <input type="password" class ="form-control w-50 m-auto" 
                  name = "password" placeholder = "Enter your password" required = "required" maxLength="20" minLength="8">
               </div> 
               <div class="mb-3">
                  <select name="std" class="form-select w-50 m-auto">
                      <option value="group">Group</option>
                      <option value="voter">Voter</option>
                  </select>
               </div>
               <button type="submit" class="btn btn-dark my-4">Login </button>
               <p>Don't have an account? <a href="./partials/registration.php" class="text-white">Register here</a></p> 

            </form>
        </div>
    </div>            

    
</body>
</html>


