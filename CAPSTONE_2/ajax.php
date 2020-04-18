<!-- Team A - Box 1 -->
<?php
include "db.php";
if (isset($_POST['searcha'])) {
   $name = $_POST['searcha'];
   $Query = "SELECT id_pk, name, ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
   ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
   ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
   ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
   ( fum_lst * -2 ) + ( def_sack * 1 ) + 
   ( def_int * 2 ) + ( forced_fumble * 0 ) + 
   ( fumble_recovery * 2 ) ) / gms,2)
   AS 'FP_PG' FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill1("<?php echo $Result['name'] ?>") ; fillscore_a("<?php echo $Result['FP_PG'] ?>") '>
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
   $Query = "SELECT id_pk, name, ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
   ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
   ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
   ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
   ( fum_lst * -2 ) + ( def_sack * 1 ) + 
   ( def_int * 2 ) + ( forced_fumble * 0 ) + 
   ( fumble_recovery * 2 ) ) / gms,2)
   AS 'FP_PG' FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill2("<?php echo $Result['name'] ?>"); fillscore_b("<?php echo $Result['FP_PG'] ?>") '>
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
   $Query = "SELECT id_pk, name, ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
   ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
   ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
   ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
   ( fum_lst * -2 ) + ( def_sack * 1 ) + 
   ( def_int * 2 ) + ( forced_fumble * 0 ) + 
   ( fumble_recovery * 2 ) ) / gms,2)
   AS 'FP_PG' FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill3("<?php echo $Result['name']; ?>"); fillscore_c("<?php echo $Result['FP_PG'] ?>") '>
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
   $Query = "SELECT id_pk, name, ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
   ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
   ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
   ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
   ( fum_lst * -2 ) + ( def_sack * 1 ) + 
   ( def_int * 2 ) + ( forced_fumble * 0 ) + 
   ( fumble_recovery * 2 ) ) / gms,2)
   AS 'FP_PG' FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill4("<?php echo $Result['name']; ?>"); fillscore_d("<?php echo $Result['FP_PG'] ?>") '>
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
   $Query = "SELECT id_pk, name, ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
   ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
   ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
   ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
   ( fum_lst * -2 ) + ( def_sack * 1 ) + 
   ( def_int * 2 ) + ( forced_fumble * 0 ) + 
   ( fumble_recovery * 2 ) ) / gms,2)
   AS 'FP_PG' FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill5("<?php echo $Result['name']; ?>"); fillscore_e("<?php echo $Result['FP_PG'] ?>") '>
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
   $Query = "SELECT id_pk, name, ROUND((( passing_yds * 0.04 ) + ( passing_td * 4 ) + 
   ( passing_int * -2 ) + ( rushing_yds * 0.1 ) + 
   ( rushing_td * 6 ) + ( receiving_rec * 1 ) + 
   ( receiving_yds * 0.1 ) + ( receiving_td * 6 ) +				
   ( fum_lst * -2 ) + ( def_sack * 1 ) + 
   ( def_int * 2 ) + ( forced_fumble * 0 ) + 
   ( fumble_recovery * 2 ) ) / gms,2)
   AS 'FP_PG' FROM main WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
      <li style="list-style-type:none" onclick='fill6("<?php echo $Result['name']; ?>"); fillscore_f("<?php echo $Result['FP_PG'] ?>") '>
         <a>
            <?php echo $Result['name']; ?>
      </li></a>
<?php
   }
}
?>
</ul>