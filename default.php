 <html>
<head>
</head>
<body>
Hai this pavan
 <?php
//Step1
 $db = mysql_connect("mysql4.000webhost.com","a5682898_pavan","pav93@AN"); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }
//Step2
 $db_select = mysql_select_db("a5682898_check",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
$result = mysql_query('SELECT * FROM `check`', $db);
 if (!$result) {
 die("Database query failed: " . mysql_error());
 }
//Step4
 while ($row = mysql_fetch_array($result)) {
 echo $row['name']." "."<br />";
 }
?>
</body>
</html>
