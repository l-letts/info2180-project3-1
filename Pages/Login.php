<!DOCTYPE html>
<html>
    
<!--    head    -->
<head>
     <!--Styles-->
    <link rel = "stylesheet" type = "text/css" href = "../Styles.css">
    
    <!--Meta Data-->
    <meta charset = "utf-8">
    <meta name = "author" content = "Hakeem Clarke, Larnell Letts"
</head>
    
<!--    body    -->
<body>
    <header>
        <a href = "../index.php"><h1 id = "Title">Cheapo Mail</h1></a>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    </header>
    
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
    
    
</body>
    
</html>