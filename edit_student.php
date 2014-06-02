<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
?>
<?php
if(isset($_POST['update']))
{
	$data = $_POST;
	$sr = $data['student_sr'];
	$name = $data['student_name'];
	$class = $data['student_class'];
	$division = $data['student_division'];
	$gender = $data['student_gender'];
	$size = $data['student_size'];
	$id = $data['student_id'];
	$query = "Update student_details
			  set
			  student_sr = '$sr',
			  student_name = '$name',
			  student_class = '$class',
			  student_division = '$division',
			  student_gender = '$gender',
			  student_size = '$size'
			  WHERE
			  id = '$id'
			 ";
	$status = $obj->query($query);
	$school_name = $_POST['school_name'];
	$term = $_POST['term'];
	if($status)
	{
		
		$url = 'view_students.php?school='.$school_name.'&term='.$term.'&chart=true';
		echo "<script>window.location.assign('".$url."');</script>";
	}
	else {
		echo "<center><h2>Error Occured Please Try Again Student Not Updated</h2></center>";
	}
}
?>
<?php
$id = $_GET['id'];
$studentData = $obj->getStudentById($id);
$school_id =  $studentData['school_id'];
$school_details  = $obj->getSingleShool($school_id);
?>
<script>
function check() {
	var key = document.getElementById("key").value;
	var skey = document.getElementById("skey").value;
	if(key == null ) {
		alert("Please Provide Security Key ");
		document.getElementById("key").focus();
		return false;
	}
	else if ( key != skey ) {
		alert("Please Provide Valid Security Key ");
		document.getElementById("key").value = "";
		document.getElementById("key").focus();
		return false;
	}
	else {
		var ans = confirm("Are You Want to Update Student Details");
		if(ans == true) {
		return true;
		}
		else {
		return false;
		}
	}
}
</script>
<table align="center" border="2">
<form action="#" method="post" onsubmit="return check()">
	<tr>
    	<td colspan="2" align="center">
        	<h1> Update Student </h1>	
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<h3> School Name : <?php echo $school_details['school_name'];?></h3>	
        </td>
    </tr>
	<tr>
    	<td align="right">
        Student Roll Number :
        </td>
        <td>
        	<input type="text" name="student_sr" value="<?php echo $studentData['student_sr'];?>" />
        </td>
    </tr>
	<tr>
    	<td align="right">
        Student Name :
        </td>
        <td>
        	<input type="text" name="student_name" value="<?php echo $studentData['student_name'];?>" />
        </td>
    </tr>
    <tr>
    	<td align="right">
        Student Standard :
        </td>
        <td>
        	<input type="text" name="student_class" value="<?php echo $studentData['student_class'];?>" />
        </td>
    </tr>
    
    <tr>
    	<td align="right">
        Student Division :
        </td>
        <td>
        	<input type="text" name="student_division" value="<?php echo $studentData['student_division'];?>" />
        </td>
    </tr>
    
    <tr>
    	<td align="right">
        Student Gender :
        </td>
        <td>
        	<input type="text" name="student_gender" value="<?php echo $studentData['student_gender'];?>" />
        </td>
    </tr>
    
    <tr>
    	<td align="right">
        Student Size :
        </td>
        <td>
        	<select name="student_size">
                        	<option> <?php echo $studentData['student_size'];?></option>
                            <option> 24 </option>
                            <option> 26 </option>
                            <option> 28 </option>
                            <option> 30 </option>
                            <option> 32 </option>
                            <option> 34 </option>
                            <option> 36 </option>
                            <option> 38 </option>
                            <option> 40 </option>
                            <option> 42 </option>
                            <option> 44 </option>
                        </select>
        </td>
    </tr>
    <tr>
    	<td align="right">
        Student Term :
        </td>
        <td>
        	<strong><?php echo $studentData['student_term'];?></strong>
        </td>
    </tr>
    <tr>
    	<td align="right">
       Created At  :
        </td>
        <td>
        	<?php echo $studentData['created'];?>
        </td>
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	Security Key :
        </td>
        <td>	
        	<span style="color:#FF0000; font-size:18px; font-weight:bold;">
        	<?php
				$key = rand(111,999);
				echo $key;
			?>
			</span>
            <input type="text" name="key" id="key" maxlength="4" style="width:40px;" />
        </td>
    </tr>
     <tr>
    	<td colspan="2" align="center" class="add_school">
        	<input type="hidden" name="skey" id="skey" value="<?php echo $key;?>" />
            <input type="hidden" name="student_id"  value="<?php echo $id;?>" />
  <input type="hidden" name="term" id="skey" value="<?php echo $_GET['term'];?>" />
  <input type="hidden" name="school_name" id="skey" value="<?php echo $_GET['school_name'];?>" />
        	<input type="submit" name="update" value="Update Student" />
            <input type="reset" name="reset" value="Reset" />
        </td>	
    </tr>
</table>