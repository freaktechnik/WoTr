<?php
   $json = $_POST['json'];
   $filename = $_POST['file'];
   $info = json_encode($json);

   if ($info != null) { //sanity check
     $file = fopen($filename,'w+');
     fwrite($file, $info);
     fclose($file);
   }
   else {
	$file = fopen('jsonerror.txt','a');
	fwrite($file,date('Y m d h: s: m')." Could not write ".$filename);
	fclose($file);
   }
?>
