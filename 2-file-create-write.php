<?php
echo "<a href=\"./\">BACK</a>";

echo "<h1>2. FILE CREATE WRITE</h1>";


echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
?>


<?php
 $File=fopen("quoc.txt","w") or (" can not open file try again");
  fwrite($File,"Ngo Truong Quoc");
  fclose($File);
echo readfile("quoc.txt");
  $File=fopen("quoc.txt","a+") or (" can not open file try again");
  fwrite($File,"insert new line");
fclose($File);

?>
