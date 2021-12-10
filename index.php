<?php

$path = $_SERVER['DOCUMENT_ROOT']; // Get Root path of your file system

$componentPath = $path . "/Components/";
$componentFileReader = $componentPath . "FileReader.php";
$componentFileTable = $componentPath . "FileTable.php";

$iconsPath = "/Components/icons/";
$cssStyle = "./Components/index.css";

include($componentFileReader);
$directoryToScan = 'src'; // Relative to current file. Change to your path!
$reader = new FileReader(__DIR__ . DIRECTORY_SEPARATOR . $directoryToScan);
$target = $reader->removeRootFromPath(!empty($_GET['path']) ? $_GET['path'] : '/');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href=<?=$cssStyle; ?>> 
	<title>File browser</title>
	
</head>
<body>

    <main class="PageBody flex-column">
	    <?php include($componentFileTable) ?>
    </main>

</body>
</html>