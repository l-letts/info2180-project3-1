<!DOCTYPE html>
<html>
    
<!--    head    -->
<head>
     <!--Styles-->
    <link rel = "stylesheet" type = "text/css" href = "../Styles.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <!--Meta Data-->
    <meta charset = "utf-8">
    <meta name = "author" content = "Hakeem Clarke, Larnell Letts">
</head>
    
<!--    body    -->
<body>
    <?php
        var $FirstName = $_POST["FirstName"];
        var $LastName =  $_POST["LastName"];
        var $Username = $_POST["Username"];
        var $Password = $_POST["Password"];
    
    
        //Validation
        $FirstName =  filter_var($FirstName, FILTER_SANITIZE_STRING);
        $LastName =  filter_var($LastName, FILTER_SANITIZE_STRING);
        $Username = filter_var($Username, FILTER_SANITIZE_STRING);
        $Password = filter_var($Password, FILTER_SANITIZE_STRING);
    
        //Hash the password
        $Password = crypt($Password);
    
        //Fetch sql and create database or tables if they don't already exist
        //Database Info
        $Servername = $_SERVER['SERVER_NAME'];
        $UserNameDB = "CheapoDB";
        $PasswordDB = "password";
        
        try {
               $conn = new PDO("mysql:host=$Servername;dbname=CheapoDB", $UserNameDb, $PasswordDB);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = file_get_contents('../schema.sql');
              
                $conn->exec($sql);
                
                }
        catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }
                          
                
        //Insert Data
        try {
                    $conn = new PDO("mysql:host=$Servername;dbname=CheapoDB", $UserNameDb, $PasswordDB);
                    
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO User (first_name, last_name, username, password)
                    VALUES ($FirstName, $LastName, $UserName,$Password)";
                    
                    $conn->exec($sql);
                    echo "Saved successfully";
                    
                }
        catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }
    
        
    ?>

    
</body>
    
    
</html>