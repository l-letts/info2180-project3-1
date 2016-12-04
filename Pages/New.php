<!DOCTYPE html>

<html>
    
<!--    Head    -->
<head>
    <!--Developers-->
    <!--Hakeem Clarke: 620086999-->
    <!--Larnell Letts: 620078293-->
    
    <title>Cheapo Mail</title>
    
    <!--Styles-->
    <link rel = "stylesheet" type = "text/css" href = "../Styles.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <!--Meta Data-->
    <meta charset = "utf-8">
    <meta name = "author" content = "Hakeem Clarke, Larnell Letts">
</head>

<body>
    <section id = "Form">
            <form id = "MainForm" action = "Create.php" method = "post" onsubmit = "return Validate()">
                 <div id = "FormHeader">
                    <h2>Complete the following to Sign Up</h2>
                 </div>

                <h3>First Name:</h3>
                <input id = "FirstName" class = "TextInput" type = "text" name= "FirstName"/>

                <h3>Last Name:</h3>
                <input id = "LastName" class = "TextInput" type = "text"  name= "LastName"/>

                <h3>Username:</h3>
                <input id = "UserName" class = "TextInput" type = "text"  name= "Username"/>

                <h3>Password:</h3>
                <input id = "Password" class = "TextInput" type = "password" name= "Password"/>

                <div id = "SubSpace">
                    <input class = "SubBtn" type = "submit"/>
                </div>
                
            </form>
    </section>
    <script src = "../Scripts/Validation.js" type = "text/javascript"></script>
</body>
    
</html>
