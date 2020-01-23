<?php // extensions_list.php 

$list = get_loaded_extensions(); 
$list2 = array_map('strtolower',$list); 
sort($list2); 
echo '<pre>'.print_r($list2,true).'</pre>'; 

?>