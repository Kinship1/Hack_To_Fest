<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.4.1.min.js"></script>
        </script>
    </head>
    <body>
        <center>
            <form method="POST">
                Enter Your Name:
                <input type="text" name="name" >
                <input type="submit" value="Submit!" name="sub"> 
            </form>
        </center>
    </body>
</html>
<?php
if ( isset($_POST['sub']))
{
    //ob_end_clean();
    $name  = $_POST['name'];
    echo "<center><h1>Welcome ".$name." ;)</h1></center>";
}
