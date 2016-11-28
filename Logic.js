$(document).ready(function(){
    
    //Initialization
    var Content = $("#Content");
    var Login = $("#LogLink");
    var Index = $("#IndexLink");
    var IndexBody = $("#IndexBody");
   
    
    //Listener for login link
    Login.on('click',function(e){
        e.preventDefault();
        $.ajax('Pages/Login.php', {
            method: 'GET'
        }).done(function(response){
            Content.html(response);
        }).fail(function(){
            alert("Error, Something went wrong sending the request");
        });
    }); 
    
    //Listener for index link
    Index.on('click',function(e){
        e.preventDefault();
        $.ajax('index.php',{
            method: 'GET'
        }).done(function(response){
            //IndexBody.empty();
            Content.html(response);
        }).fail(function(){
            alert("Error, Something went wrong sending the request");
        });
    });
});
    