
   <?php 
     $text  ="The quick brown fox jumps over the lazy dog.";
     $lowercase=strtolower($text);
     $replace = str_replace("brown","red",$lowercase);
     echo $replace;
    ?>
