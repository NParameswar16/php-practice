<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];

try {
    if ($n2 == 0) {
        throw new Exception('Division by zero is not allowed');
    }

$n3=("$n1")/("$n2");
echo $n3;
}
catch(Exception $e)
{
echo $e->getMessage();
}

?>