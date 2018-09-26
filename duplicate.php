<?php 
$str = 'one,two,one,three,two,four,five';
$str = implode(',',array_unique(explode(',', $str)));
echo $str;
?>