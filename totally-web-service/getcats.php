<?php
include 'connect.php';
$uid = $_GET['uid'];
// Protect against form submission variables.
if (get_magic_quotes_gpc())
{
 $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
 while (list($key, $val) = each($process))
 {
 foreach ($val as $k => $v)
 {
 unset($process[$key][$k]);
 if (is_array($v))
 {
 $process[$key][stripslashes($k)] = $v;
 $process[] = &$process[$key][stripslashes($k)];
 }
 else
 {
 $process[$key][stripslashes($k)] = stripslashes($v);
 }
 }
 }
 unset($process);
}
try
{
 $sql = "SELECT categoryname FROM categories WHERE uid = '" . $uid . "'";
 $result = $pdo->query($sql);
}
catch (PDOException $e)
{
 echo 'Error fetching data: ' . $e->getMessage();
 exit();
} echo "<table border='1'>
<tr>
<th>Categories</th>
</tr>";
while ($row = $result->fetch())
{
 echo "<tr>";
 echo "<td>" . $row['categoryname'] . "</td>";
 echo "</tr>";
 }
echo "</table>";