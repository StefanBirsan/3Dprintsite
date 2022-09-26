<?php  
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed =  array('stl', 'jpg', 'png');

	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0) {
			if($fileSize < 5000000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = '\xampp\htdocs'.$fileNameNew;	
				move_uploaded_file($fileTmpName, $fileDestination);
				header("location: demo.php?uploadsuccess");
			} 
		}
	}

}

?>