
<form id="" name="" method="post" action="readwrite.php">
    a=<input type="number" name="a"><br>
    b=<input type="number" name="b"><br>
    <input type="submit" value="result"><br>

</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
if($a>$b)
    {
        echo 'largest Number='.$a;
    }
    
    else
        {
              {
        echo '<p style="color:blue;">largest Number='.$b.' </p>';
    }
        }



?>
