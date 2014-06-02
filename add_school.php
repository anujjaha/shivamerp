<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
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
		var ans = confirm("Are You Want to Save School");
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
<form action="save_school.php" method="post" onsubmit="return check()">
	<tr>
    	<td align="right" class="add_school">
        	School Name :
        </td>	
        <td>
        	<input type="text" name="school_name" />
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	Contact Person Name :
        </td>	
        <td>
        	<input type="text" name="person_name" />
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	School Address :
        </td>	
        <td>
        	<input type="text" name="address" />
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	School Contact Number :
        </td>	
        <td>
        	<input type="text" name="contact_number" />
        </td>	
    </tr>
    
    <tr>
    	<td align="right" class="add_school">
        	School Other Contact Number :
        </td>	
        <td>
        	<input type="text" name="other_contact" />
        </td>	
    </tr>
    
    <tr>
    	<td align="right" class="add_school">
        	Email Id :
        </td>	
        <td>
        	<input type="text" name="emailid" />
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	Fix Rate :
        </td>	
        <td>
        	<input type="text" name="rate" />
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
        	<input type="submit" name="Save" value="Save" />
            <input type="reset" name="reset" value="Reset" />
        </td>	
    </tr>
</form>

</table>