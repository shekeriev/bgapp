<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Факти за България</title>
  </head>
  <body>
    <div align="center">
      <h1>Факти за България</h1>
      <img src="bulgaria-map.png" />
      <table>
        <tr>
          <td>Площ</td>
          <td></td>
          <td>110 993.6 кв.км.</td>
        </tr>
        <tr>
          <td>Население</td>
          <td></td>
          <td>7 101 859</td>
        </tr>
        <tr>
          <td>Столица</td>
          <td></td>
          <td>София</td>
        </tr>
      </table>
      <br />
      <h1>Големи градове</h1>
      <table>
<?php
   require_once ('config.php');

   try {
      $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
      $query = $connection->query("SELECT city_name, population FROM cities ORDER BY population DESC");
      $cities = $query->fetchAll();

      if (empty($cities)) {
         echo "<tr><td>Няма данни.</td></tr>\n";
      } else {
         foreach ($cities as $city) {
            print "<tr><td>{$city['city_name']}</td><td align=\"right\">{$city['population']}</td></tr>\n";
         }
      }
   }
   catch (PDOException $e) {
      print "<tr><td>Няма връзка към базата. Опитайте отново.</td></tr>\n";
   }
?>
      </table>
    </div>
  </body>
</html>
