<?php

//Read all content from file into a string
$file = file_get_contents('./test1.txt', FILE_USE_INCLUDE_PATH);

$arr = explode(' ', $file);

//foreach($arr as $str){
  // echo $str."Hello";
//}


if(isset($_POST['submit']))
{

		if(file_exists("./dummy.txt"))
		{
			
		}else{
			
		fopen("./dummy.txt",'w');
			
		$original = $_POST['orig'];
		$new = $_POST['new'];
		$replace = str_replace(" ".$original." "," ".$new." ",$file);
		//echo($original);
		//echo($new);
		file_put_contents('./test1.txt', $replace); 
		
		unlink("./dummy.txt");
		}
	 
	 
	 //Read all content from file into a string
    $file = file_get_contents('./test1.txt', FILE_USE_INCLUDE_PATH);
	
}



?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Replace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="margin:20px; ">

<h1>FILE</h1>



<section style="margin:20px; padding: 20px;  border-style: solid; border-width: 2px; ">
  <h1>Test1.txt</h1>
  <p><?php echo($file) ?></p>
</section> 

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" style="display:inline-block; margin:20px;">
	Original word: <input type="text" name="orig" style="display:inline-block">
	New word: <input type="text" name="new" style="display:inline-block">
	<input type="submit" name="submit" value="Replace word">
</form>

</body>
</html> 