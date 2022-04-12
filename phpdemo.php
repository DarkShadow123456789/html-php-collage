<?php
echo "<center><b>style is:- <b> ".$_GET['s1']."<br><b>size is:- <b> ".$_GET['s2']."<br><b>color is:-<b> ".$_GET['s3']."<br><b>background color is:- <b> ".$_GET['s4']."</center>";
setcookie("set1",$_GET['s1']);
setcookie("set2",$_GET['s2']);
setcookie("set3",$_GET['s3']);
setcookie("set4",$_GET['s4']);
?>

<html>
<body>
<form action="amol.php">
    <center>
        <input type=submit value=OK>
    </center>
</form>
</body>
</html>
