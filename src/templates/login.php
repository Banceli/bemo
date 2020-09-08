<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title> 
<link rel="stylesheet" href="../styles/login.css">
</head>  
<body>  
    <center> <h1>BeMo </h1> </center> 
    <form action="../back-end/login.php" method="post">
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Login</button> 
       
    </form>   
</body>   
</html>

 
