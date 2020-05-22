<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{




$sec=implode(",",$sec);


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$sec',now())";
mysqli_query($conn,$query);

//upload image




$err="<font color='blue'>Added successfull !!</font>";

}
}




?>
<h2>Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
<tr>
					<td>Department</td>
					<Td>
					1 CSE A<input value="1csea" type="radio" name="sec[]"/>
					1 CSE B<input value="1cseb" type="radio" name="sec[]"/>
					1 CSE C<input value="1csec" type="radio" name="sec[]"/>
                                        1 CSE D<input value="1csed" type="radio" name="sec[]"/><br/>
                                        
                                        2 CSE A<input value="2csea" type="radio" name="sec[]"/>
				        2 CSE B<input value="2cseb" type="radio" name="sec[]"/>
					2 CSE C<input value="2csec" type="radio" name="sec[]"/><br/>
                                        
                                        
                                        3 CSE A<input value="3csea" type="radio" name="sec[]"/>
				        3 CSE B<input value="3cseb" type="radio" name="sec[]"/>
					3 CSE C<input value="3csec" type="radio" name="sec[]"/>
                                        3 CSE D<input value="3csed" type="radio" name="sec[]"/>
                                        
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>