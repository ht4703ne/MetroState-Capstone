<!-- Team A - Box 1 -->
<?php
include "db.php";
if (isset($_POST['searcha'])) {
   $name = $_POST['searcha'];
   $Query = "SELECT id_pk, name FROM player WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li style="list-style-type:none" onclick='fill1("<?php echo $Result['name']?>")'>
   <a>
	 
				<?php echo $Result['name']?>	
			 
   </li></a>
   <?php
}}
?>
</ul>

<!-- Team B - Box 1 -->
<?php
include "db.php";
if (isset($_POST['searchb'])) {
   $name = $_POST['searchb'];
    $Query = "SELECT name FROM player WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li style="list-style-type:none" onclick='fill2("<?php echo $Result['name']; ?>")'>
   <a>
       <?php echo $Result['name']; ?>
   </li></a>
   <?php
}}
?>
</ul>

<!-- Team A - Box 2 -->
<?php
include "db.php";
if (isset($_POST['searchc'])) {
   $name = $_POST['searchc'];
    $Query = "SELECT name FROM player WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li style="list-style-type:none" onclick='fill3("<?php echo $Result['name']; ?>")'>
   <a>
       <?php echo $Result['name']; ?>
   </li></a>
   <?php
}}
?>
</ul>

<!-- Team B - Box 2 -->
<?php
include "db.php";
if (isset($_POST['searchd'])) {
   $name = $_POST['searchd'];
    $Query = "SELECT name FROM player WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li style="list-style-type:none" onclick='fill4("<?php echo $Result['name']; ?>")'>
   <a>
       <?php echo $Result['name']; ?>
   </li></a>
   <?php
}}
?>
</ul>

<!-- Team A - Box 3 -->
<?php
include "db.php";
if (isset($_POST['searche'])) {
   $name = $_POST['searche'];
    $Query = "SELECT name FROM player WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li style="list-style-type:none" onclick='fill5("<?php echo $Result['name']; ?>")'>
   <a>
       <?php echo $Result['name']; ?>
   </li></a>
   <?php
}}
?>
</ul>

<!-- Team B - Box 3 -->
<?php
include "db.php";
if (isset($_POST['searchf'])) {
   $name = $_POST['searchf'];
    $Query = "SELECT name FROM player WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li style="list-style-type:none" onclick='fill6("<?php echo $Result['name']; ?>")'>
   <a>
       <?php echo $Result['name']; ?>
   </li></a>
   <?php
}}
?>
</ul>






























<!-- Team A - Box 1 -->
<?php
include "db.php";
if (isset($_POST['searcha'])) {
   $name = $_POST['searcha'];
   $Query = "SELECT id_pk, name FROM player WHERE name LIKE '%$name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li style="list-style-type:none" onclick='fillida("<?php echo $Result['name']?>")'>
   <a>
	 
				<?php echo $Result['name']?>	
			 
   </li></a>
   <?php
}}
?>
</ul>