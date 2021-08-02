<?php  
session_start();  
?>   
<html>  
<body>  
<?php  
$name=$_POST['name'];
$_SESSION["user"] = $name;  
    echo "User Loing ".$_SESSION["user"]; 
?> 
<form action="c.php">
    <button type="submit">Logout</button>
</form>
</body>  
</html>  