<?php
//$command = escapeshellcmd('/python3 Applications/XAMPP/htdocs/demo/_practical-app/test/py');
//$output = shell_exec($command);
//
//echo $output;

ob_start();
$msg = passthru('python /Applications/XAMPP/htdocs/demo/_practical-app/test.py 2>&1');
$output = ob_get_clean();

//print_r($msg);
print_r($output);
?>