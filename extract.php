<?php
$arr=["films"=>["w","e","r"],"pageTitle"=>"test"];
extract($arr);
print_r($films);
echo $pageTitle;
?>