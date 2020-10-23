<?php
//header ben iso ke enter ng browser
header('Content-type: text/plain');
function pattern($rows_no)
{
  for ($i = 1; $i <= $rows_no; $i++) {

    for ($k = 1; $k < $i; $k++)
      echo " ";

    for ($j = $i; $j <= $rows_no; $j++)
      echo "* ";

    echo "\n";
  }

  for ($i = $rows_no - 1; $i >= 1; $i--) {

    for ($k = 1; $k < $i; $k++)
      echo " ";

    for ($j = $i; $j <= $rows_no; $j++)
      echo "* ";

    echo "\n";
  }
}
pattern(3);
