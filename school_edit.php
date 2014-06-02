<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
?>
<?php
$id  = $_GET['id'];
$school_data =  $obj->getSingleShool($id);
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
		var ans = confirm("Are You Want to Update School Details");
		if(ans == true) {
		return true;
		}
		else {
		return false;
		}
	}
}
</script>
<table align="center" border="2" width="90%">
<form action="#" method="post" onsubmit="return check()">
	<tr>
    	<td colspan="2" align="center">
        	<h1> Update School Details </h1>
        </td>
    </tr>
	<tr>
    	<td align="right" class="add_school" width="50%">
        	School Name :
        </td>	
        <td  width="50%">
        	<input type="text" name="school_name" value="<?php if(!empty($school_data['school_name'])) echo $school_data['school_name'];?>" />
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	Contact Person Name :
        </td>	
        <td>
        	<input type="text" name="person_name" value="<?php if(!empty($school_data['person_name'])) echo $school_data['person_name'];?>"  />
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school" >
        	School Address :
        </td>	
        <td>
        	<input type="text" name="address" value="<?php if(!empty($school_data['address'])) echo $school_data['address'];?>" />
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	School Contact Number :
        </td>	
        <td>
        	<input type="text" name="contact_number" value="<?php if(!empty($school_data['contact_number'])) echo $school_data['contact_number'];?>" />
        </td>	
    </tr>
    
    <tr>
    	<td align="right" class="add_school">
        	School Other Contact Number :
        </td>	
        <td>
        	<input type="text" name="other_contact" value="<?php if(!empty($school_data['other_contact'])) echo $school_data['other_contact'];?>" />
        </td>	
    </tr>
    
    <tr>
    	<td align="right" class="add_school">
        	Email Id :
        </td>	
        <td>
        	<input type="text" name="emailid" value="<?php if(!empty($school_data['emailid'])) echo $school_data['emailid'];?>"  />
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
            <input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
        	<input type="submit" name="update" value="Update School" />
            <input type="reset" name="reset" value="Reset" />
        </td>	
    </tr>
</form>
</table>
<?php
if(isset($_POST['update'])) {
$id = $_POST['id'];
	$data = $_POST;
	$school = $data['school_name'];
	$person = $data['person_name'];
	$address = $data['address'];
	$contact = $data['contact_number'];
	$mobile = $data['other_contact'];
	$email = $data['emailid'];
	
	$query = "update school_details
			  SET
			  school_name = '$school',
			  person_name = '$person',
			  address = '$address',
			  contact_number = '$contact',
			  other_contact = '$mobile',
			  emailid = '$email'
			  where
			  id = '$id'
			 ";
	if($obj->query($query)) {
	?>
    	<script>window.location.assign("school_list.php");</script>
    <?php
	}
	else {
		echo "<center><h1>Error Occure School Details Not Modified Please Try Again..</h1></center>";
	}
}
?>