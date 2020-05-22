<?php 
#$_SESSION['user']=$e
#$hob=implode(",",$hob);
include('../connection.php');
 $conn = mysqli_connect('localhost','root','','trailnotice');

$q=mysqli_query($conn,"select * from notice n,user u where u.section=n.section and u.email= '".$_SESSION['user']."' ");
#$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']=$e."'");
#$q=mysqli_query($conn,"select * from notice n,user u where u.section=n.section");
#$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<h2>All Notification</h2>

      <table class="w3-table-all">
      <thead>
      <tr class="w3-black">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>              
		<th>Date</th>
                <th>file</th>
                <th>view</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{
  ?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['subject'] ?></td>
<td><?php echo $row['Description'] ?></td>
<td><?php echo $row['Date'] ?></td>
<td><?php echo $row['file'] ?></td>
<td><a href="../admin/uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>

</tr>

<?php
$i++;
}
		?>
      </thead>        
</table>
<?php }?>