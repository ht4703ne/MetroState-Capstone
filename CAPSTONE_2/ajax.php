<!-- Team A - Box 1 -->
<?php
include "db.php";
if (isset($_POST['searcha'])) {
   $name = $_POST['searcha'];
   $Query = "SELECT name, team, pos, gms,				

   CASE 
   
               WHEN pos='TE' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 7 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.15 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='RB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.12 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2.5 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='WR' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 0.8 ) + 
                  ( receiving_yds * 0.05 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='QB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -3 ) + ( rushing_yds * 0.2 ) + 
                  ( rushing_td * 7.5 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -3 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='D/ST' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               ELSE 0
   
               END AS 'FANTALYTICS'
   
               FROM main WHERE name LIKE '%$name%' LIMIT 5";

   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill1("<?php echo $Result['name'] ?>") ; fillscore_a("<?php echo $Result['FANTALYTICS'] ?>") '>
         <a>
            <?php echo $Result['name'] ?>
      </li></a>

<?php
   }
}
?>
</ul>

<!-- Team B - Box 1 -->
<?php
include "db.php";
if (isset($_POST['searchb'])) {
   $name = $_POST['searchb'];
   $Query = "SELECT name, team, pos, gms,				

   CASE 
   
               WHEN pos='TE' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 7 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.15 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='RB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.12 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2.5 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='WR' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 0.8 ) + 
                  ( receiving_yds * 0.05 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='QB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -3 ) + ( rushing_yds * 0.2 ) + 
                  ( rushing_td * 7.5 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -3 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='D/ST' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               ELSE 0
   
               END AS 'FANTALYTICS'
   
               FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill2("<?php echo $Result['name'] ?>"); fillscore_b("<?php echo $Result['FANTALYTICS'] ?>") '>
         <a>
            <?php echo $Result['name']; ?>

      </li></a>
<?php
   }
}
?>
</ul>

<!-- Team A - Box 2 -->
<?php
include "db.php";
if (isset($_POST['searchc'])) {
   $name = $_POST['searchc'];
   $Query = "SELECT name, team, pos, gms,				

   CASE 
   
               WHEN pos='TE' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 7 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.15 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='RB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.12 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2.5 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='WR' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 0.8 ) + 
                  ( receiving_yds * 0.05 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='QB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -3 ) + ( rushing_yds * 0.2 ) + 
                  ( rushing_td * 7.5 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -3 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='D/ST' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               ELSE 0
   
               END AS 'FANTALYTICS'
   
               FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill3("<?php echo $Result['name']; ?>"); fillscore_c("<?php echo $Result['FANTALYTICS'] ?>") '>
         <a>
            <?php echo $Result['name']; ?>
      </li></a>
<?php
   }
}
?>
</ul>

<!-- Team B - Box 2 -->
<?php
include "db.php";
if (isset($_POST['searchd'])) {
   $name = $_POST['searchd'];
   $Query = "SELECT name, team, pos, gms,				

   CASE 
   
               WHEN pos='TE' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 7 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.15 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='RB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.12 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2.5 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='WR' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 0.8 ) + 
                  ( receiving_yds * 0.05 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='QB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -3 ) + ( rushing_yds * 0.2 ) + 
                  ( rushing_td * 7.5 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -3 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='D/ST' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               ELSE 0
   
               END AS 'FANTALYTICS'
   
               FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill4("<?php echo $Result['name']; ?>"); fillscore_d("<?php echo $Result['FANTALYTICS'] ?>") '>
         <a>
            <?php echo $Result['name']; ?>
      </li></a>
<?php
   }
}
?>
</ul>

<!-- Team A - Box 3 -->
<?php
include "db.php";
if (isset($_POST['searche'])) {
   $name = $_POST['searche'];
   $Query = "SELECT name, team, pos, gms,				

   CASE 
   
               WHEN pos='TE' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 7 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.15 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='RB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.12 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2.5 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='WR' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 0.8 ) + 
                  ( receiving_yds * 0.05 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='QB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -3 ) + ( rushing_yds * 0.2 ) + 
                  ( rushing_td * 7.5 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -3 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='D/ST' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               ELSE 0
   
               END AS 'FANTALYTICS'
   
               FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill5("<?php echo $Result['name']; ?>"); fillscore_e("<?php echo $Result['FANTALYTICS'] ?>") '>
         <a>
            <?php echo $Result['name']; ?>
      </li></a>
<?php
   }
}
?>
</ul>

<!-- Team B - Box 3 -->
<?php
include "db.php";
if (isset($_POST['searchf'])) {
   $name = $_POST['searchf'];
   $Query = "SELECT name, team, pos, gms,				

   CASE 
   
               WHEN pos='TE' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 7 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.15 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='RB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1.2 ) + 
                  ( receiving_yds * 0.12 ) + ( receiving_td * 7 ) +				
                  ( fum_lst * -2.5 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='WR' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 0.8 ) + 
                  ( receiving_yds * 0.05 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='QB' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -3 ) + ( rushing_yds * 0.2 ) + 
                  ( rushing_td * 7.5 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -3 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               WHEN pos='D/ST' THEN
   
                  ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
                  ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
                  ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
                  ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
                  ( fum_lst * -2 ) + ( def_sack * 1 ) + 
                  ( def_int * 2 ) + ( forced_fumble * 0 ) + 
                  ( fumble_recovery * 2 ) ) / 16,2)
   
               ELSE 0
   
               END AS 'FANTALYTICS'
   
               FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill6("<?php echo $Result['name']; ?>"); fillscore_f("<?php echo $Result['FANTALYTICS'] ?>") '>
         <a>
            <?php echo $Result['name']; ?>
      </li></a>
<?php
   }
}
?>
</ul>