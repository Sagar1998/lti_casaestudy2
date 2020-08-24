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

    <?php
    $id=$_POST['id'];
    $fp = file('students.csv',FILE_SKIP_EMPTY_LINES);
    $row=count($fp);
    if (($handle = fopen("students.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $search[]=$data[0];
        $search1[]=$data;
        for($i=1;$i<=$row;$i++)
        {
          for($j=0;$j<=8;$j++){
            if($id==$search[$i])
              {
                $finaldata[]= $data[$j];
              }
              }

        }
      }
      fclose($handle);
    }
    ?>


    <table style="width:100%">
    <?PHP
    for($j=0;$j<8;$j++)
    {
      echo "<tr>";
    echo "<th>";echo $search1[0][$j];echo "</th>";
    echo "<td>";echo $finaldata[$j];echo "</td>";
    echo "</tr>";
    }
    ?>
    </table>

    <br><br>
    <center>
    <a href="index.html">Go Back To main menue</a><br><br>
    <a href="search-student.html">search again</a>
  </center>



  </body>
</html>
