<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
 
<body>
  <div class="container">
    <br>
    <h3>Login Form</h3>
    <form action="./process.php" method="$_POST">
        <div>
        <!-- <label for="Name">Name</label> -->
            <input type="text" placeholder="Enter Your Name" name="name" required>
        </div>
        <br>
        <div>
            <!-- <label for="Email">Email</label> -->
            <input type="email" placeholder="Enter Your Email" name="email" required>
        </div>
        <br>
        <div>
            <!-- <label for="Phone Number">Phone</label> -->
            <input type="text" placeholder="Enter Your Number" name="phone" required>
        </div>
        <br>
        <div>
            <!-- <label for="Password">Password</label> -->
            <input type="password" placeholder="Enter Your Password" name="password" required>
        </div>
        
       
        <br>
        <div>
            <button type="submit" value="submit">Register</button>
        </div>
    </form>
  </div>
</body>
</html>