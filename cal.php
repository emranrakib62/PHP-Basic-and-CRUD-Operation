
<form id="" name="" method="post" action="cal.php">
    a=<input type="number" name="a"><br>
    b=<input type="number" name="b"><br>
     op=<input type="text" name="op"><br>
    <input type="submit" value="result"><br>

</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$op=$_POST['op'];

//for +
if($op=='+')
    {
        $c=$a+$b;      
echo  'total='.$c;
    }

    //for -
    else if($op=='-')
        {

      $c=$a-$b;      
echo  'total='.$c;
    }
    // for *
 else if($op=='*'){

      $c=$a*$b;      
echo  'total'.$a.$op.$b.'='.$c;
    }
    //for /
     else if($op=='/')
        {

      $c=$a/$b;      
echo  'total='.$c;
    }
// for %
 else if($op=='%')
        {

      $c=$a%$b;      
echo  'total='.$c;
    }

else{
    echo"invalied input";
}
?>
