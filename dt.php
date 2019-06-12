<?php

 exec('wmic memorychip get capacity', $totalMemory);

 $ram = array_sum($totalMemory) / 1024 ; // KB

 $resmemory = $_POST['resmemory']; //reserve memory
 $pageframesize = $_POST['pfsize']; //page frame size

 $amountPFrames = $resmemory/$pageframesize; //Amount of page frames




?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>


</body>
</html>