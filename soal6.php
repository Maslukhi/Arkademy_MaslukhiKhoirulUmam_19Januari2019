<?php 

$hostname="localhost";
$username="root";
$password="";
$dbname="komunitas";
mysql_connect($hostname,$username,$password);
mysql_select_db($dbname);

?>

<html>
<head>
<title>DAFTAR PESERTA KOMUNITAS</title>
</head>

<body>
<br>
<br>

<div align="center"><B>DAFTAR PESERTA KOMUNITAS</B><br>

<?php
echo "<br>";
$query=mysql_query("SELECT * FROM table_persons");
$jumlah=mysql_num_rows($query); 
echo "<table border=\"1\" align=\"center\">
<tr bgcolor='pink'>
	<th>ID</th>
	<th>Nama</th>
</tr>";
while ($row=mysql_fetch_array($query))
{
	echo "<tr><td align = 'center'>";
	echo $row["id"];
	echo "</td><td align = 'left'>";
	echo $row["nama_persons"];
	echo "</td>";
}
echo "</table>";
echo "<br><br>";

?>

<div align="center"><B>DAFTAR HOBBY<B><br>
<?php
echo "<br>";
$query=mysql_query("SELECT * FROM table_hobbies");
$jumlah=mysql_num_rows($query); 
echo "<table border=\"1\" align=\"center\">
<tr align='center' bgcolor='yellow'>
	<th>ID</th>
	<th>Person ID</th>
	<th>Nama</th>
</tr>";
while ($row=mysql_fetch_array($query))
{
	echo "<tr><td align='center'>";
	echo $row["id_hobbies"];
	echo "</td><td align='center'>";
	echo $row["person_id"];
	echo "</td><td>";
	echo $row["name_hobbies"];
	echo "</td>";
}
echo "</table>";
echo "<br><br>";

?>

<div align="center"><B>TABEL LAPORAN<B><br>
<?php
$query=mysql_query($dbname,"SELECT table_hobbies.*, table_persons.id, table_hobbies.name_hobbies 
                            FROM table_hobbies, table_persons, table_hobbies 
                            WHERE table_hobbies.name_hobbies = table_persons.id 
                            AND table_hobbies.id_hobbies = table_persons.id  
                            ORDER BY id DESC");
?>

</div>
</body>
</html>

