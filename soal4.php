<?php

$angka=array("a","b","c","d","e","f","g","h","i","j","k","l");
$no=0;

echo "<table border=0>";
for($i=1; $i <=4; $i++){
      echo "<tr>";
      for($j=1; $j<=3; $j++){
            echo "<td>";
            $angkabaru[$i][$j]=$angka[$no];
            echo $angkabaru[$i][$j];
            echo "</td>";
            $no++;
      }
}
echo "</table>";

?>
