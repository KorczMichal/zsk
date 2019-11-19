<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
setcookie("age",20);
setcookie("name","Nowak",time()+60);
echo time(),"<br>";
//echo $_COOKIE["age"];
setcookie("age","",time()-1);
    echo"<pre>";
    print_r($_COOKIE);
    echo"</pre>";
    echo "<script>alert(\"test\")</script>"
?>

</body>
</html>
