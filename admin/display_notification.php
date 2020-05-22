<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$conn = mysqli_connect('localhost','root','','trailnotice');
$q=mysqli_query($conn,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Notice found !!!</h2>";
}
else
{
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<h2 style="color:#00FFCC">All Notice</h2>

 <table class="w3-table-all">
      <thead>
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice">Add New notice</a></th>
	</tr>
	 <tr class="w3-black">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>section</th>
                <th>file</th>
                <th>view</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{
  ?>

<td><?php echo $i ?></td>
<td><?php echo $row['section'] ?></td>
<td><?php echo $row['subject'] ?></td>
<td><?php echo $row['Description'] ?></td>
<td><?php echo $row['file'] ?></td>
<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
<td><?php echo $row['Date'] ?></td>


<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>