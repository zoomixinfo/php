<?php  
setcookie("name", "mkd",time()+3600); 
setcookie("user", "Raju",time()+3600);  
?>  
<html>  
<body>  
<?php  
if(!isset($_COOKIE["user"])) 
    {  
    echo "Sorry, cookie is not found!";  
    } 
else
    {  
    echo "<br/>Cookie Value: " . $_COOKIE["user"];  
    echo "<br/>Cookie Value: " . $_COOKIE["name"]; 
    }  
?>  
</body>  
</html>  