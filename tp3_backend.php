<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    print "<p>ejercicio1</p>\n";
    for ($i=1; $i <=100 ; $i++) {
      // code...
    print "<p> $i </p>\n";
    }
    print "<p>ejercicio2</p>\n";
    for ($i=100; $i >=1 ; $i--) {
      print "<p> $i </p>\n";
    }
    print "<p>ejercicio3</p>\n";
    for ($i=2; $i <=100; $i=$i+2) {
      print "<p> $i </p>\n";
    }
    print "<p>ejercicio4</p>\n";
    for ($i=1; $i <100 ; $i=$i+2) {
      print "<p> $i </p>\n";
    }
    print "<p>ejercicio5</p>\n";
    $suma=0;
    for ($i=1; $i<=20; $i++) {
      $suma= $suma+ $i;
      print "<p>$suma</p>\n";
    }

      Print "<p>ejercicio6</p>\n";
      $suma=0;
      for ($i=2; $i<=20; $i=$i+2) {
        $suma= $suma+ $i;
        print "<p>$suma</p>\n";

    }

    ?>

  </body>
</html>
