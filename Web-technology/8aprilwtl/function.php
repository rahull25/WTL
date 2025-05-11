<?php
$name="Amar";
function sayhello(){
  global $name;
  echo "Hello".$name;
}
sayhello();
?>