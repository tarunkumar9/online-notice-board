<?php 
include_once '../connection.php';
extract($_POST);
if(isset($add))
{$file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
         if(move_uploaded_file($file_loc,$folder.$file)) 
	if($details=="" || $sub=="" || $hob=="" )
	{
           
           
	$err="<font color='red'>fill all the fileds first</font>";	
	
    
        
        }
	else
	{
        
	
                                         
	
                
                    $conn = mysqli_connect('localhost','root','','trailnotice');
                     $hob=implode(",",$hob);
                    if($hob === '1csea'){                        
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
               
                    }
		
                    if($hob === '1csec'){  
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                  }
             if($hob === '1cseb'){  
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                  }
 if($hob === '1csed'){                        
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                    }
                  
                  
             if($hob === '2csea'){                        
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                    }
		
                    if($hob === '2csec'){  
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                  }
             if($hob === '2cseb'){  
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                  }
                  
                  
                  if($hob === '3csea'){                        
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                    }
		
                    if($hob === '3csec'){  
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                  }
             if($hob === '3cseb'){  
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                  }
 if($hob === '3csed'){                        
mysqli_query($conn,"insert into notice values('','$hob','$sub','$details','$file','$file_type','$file_size',now())");
                    }
                  
                  
                  
                    
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}

?>

<!-- desing-->
<h2><b>Add New Notice</b></h2>
<form method="post"  enctype="multipart/form-data">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
            <div class="col-sm-4"><strong>Enter Subject</strong></div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
            <div class="col-sm-4"><strong>Enter Details</strong></div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
                
     <!--file uploading-->           
                
	<b> <input type="file" name="file" /></b>
         
         
         <br/>
	<div class="row">
            <br/>
            <div class="col-sm-4"><strong>Select Section</strong></div>
		<div class="col-sm-5">
                <b>1 CSE A</b><input value="1csea" type="radio" name="hob[]"/>
		<b>1 CSE B</b><input value="1cseb" type="radio" name="hob[]"/>			
		<b>1 CSE C</b><input value="1csec" type="radio" name="hob[]"/>
                <b>1 CSE D</b><input value="1csed" type="radio" name="hob[]"/><br/>
                
                <b>2 CSE A</b><input value="2csea" type="radio" name="hob[]"/>
		<b>2 CSE B</b><input value="2cseb" type="radio" name="hob[]"/>			
		<b>2 CSE C</b><input value="2csec" type="radio" name="hob[]"/><br/>
                
                <b>3 CSE A</b><input value="3csea" type="radio" name="hob[]"/>
		<b>3 CSE B</b><input value="3cseb" type="radio" name="hob[]"/>			
		<b>3 CSE C</b><input value="3csec" type="radio" name="hob[]"/>
                <b>3 CSE D</b><input value="3csed" type="radio" name="hob[]"/>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	