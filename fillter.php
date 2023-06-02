<?php
$str = "<h1>Hello <script>vsdsdv</script>World!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>