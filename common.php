<? 
function hr(){
      echo "<hr>";
    }
  
function br(){
    echo "<br>";
  }
  
function dump($var, $return = false){
  if (is_array($var)){
    $out = print_r($var, true);
  } else if (is_object($var)) {
    $out = var_export($var, true);
  } else {
    $out = $var;
  }

  if ($return){
    return "\n<pre>$out</pre>\n";
  } else {
    echo "\n<pre>$out</pre>\n";
  }
}

function getCurrentDateTime(){
  return date("Y-m-d H:i:s");
}
  

?>