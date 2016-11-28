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
    <meta name = "author" content = "Hakeem Clarke, Larnell Letts"
</head>
    
<!--    body    -->
<body>
    
    <form class = "LogForm" action = "log.php" method = "post">
       
        <h2 id = "FormTitle">Login</h2>
     
        
        <section class = "FormEl">
            <label for = "User">Username:</label>
            <input class = "TextInput" type = "text" name = "User">
        </section>
        
        <section class = "FormEl">
            <label for = "Password">Password:</label>
            <input class = "TextInput" type = "text" name = "Password">
        </section>
        
      
        <input type = "submit" class = "Btn" value = "Log In">
    </form>
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src = "Logic.js"></script>
</body>
    
    
</html>