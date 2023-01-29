<?php
require_once('database.php');
$db= new Database();
$cu=$_GET['cu'];
if($cu== 1)
{
?>
<div class="container mt-3">
<h2>All Books</h2>
<table class="table table-bordered">
    <tr>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Book ISBN</th>
        <th>Book Author</th>
        <th>Book Price($)</th>
    </tr>
   <?php
$st = $db->displaybooksUser();
foreach($st as $row){
    print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>");
    print('</tr>');
}
?>
</table>
</div>
<?php
}

elseif($cu==2)
{