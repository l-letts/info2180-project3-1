/* Hakeem Clarke: 620086999   *
*  Larnell Letts: 620078293   *
++++++++++++++++***************/

//Provide onsubmit value
function Validate(){
    return Check();
}


//Perform validation
function Check(){ 
    
    //Declaration and Initialization
    var FirstName = document.forms["MainForm"]["FirstName"];
    var LastName = document.forms["MainForm"]["LastName"];
    var Username = document.forms["MainForm"]["Username"];
    var Password = document.forms["MainForm"]["Password"];
    var Flag = 0;
    
    //Create regular expression for password pattern
    var PassPattern = new RegExp("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).+[a-zA-Z0-9]{7,}$");
   
    //Test Password
   /* if(!(PassPattern.test(Password.value))){
        alert("Password Error");
        Flag++;
    }*/
   
    
    //Check fields
    if(FirstName.value == ""){
        FirstName.className = "Invalid";
        Flag++;
    }
    
    else{
         FirstName.className = "TextInput";
    }
    
    if(LastName.value == ""){
        LastName.className = "Invalid";
        Flag++;
    }
    
    else{
         LastName.className = "TextInput";
    }
    
    if(Username.value == ""){
        Username.className = "Invalid";
        Flag++;
    }
    
    else{
        Username.className = "TextInput";
    }
    
    if(Password.value == ""){
        Password.className = "Invalid";
        Flag++;
    }
    
    else{
        Password.className = "TextInput";
    }
    
    if(Flag > 0){
        return false;
    }
    
    else{
        return true;
    }
}