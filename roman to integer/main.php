<?php 
  spl_autoload_register(function ($classname) {
    include_once('./'.$classname.'.php');
  });

  $a = new Solution();
  echo $a->romanToInt('I');
  
?>