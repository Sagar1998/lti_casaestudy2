<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table style="width:100%">

    <?php
    $f = fopen("students.csv", "r");
    while (($line = fgetcsv($f)) !== false) {
            echo "<tr>";
            foreach ($line as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>\n";
    }
    fclose($f);
?>
<br><br>
<center>
<a href="index.html">GO BACK</a>
</center>
  </body>
</html>
