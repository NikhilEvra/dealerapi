<!-- <a href="api.zip" download>downbload</a>
 -->

  
 <?php  
$file_url = 'api.zip';  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: utf-8");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);  
?>  