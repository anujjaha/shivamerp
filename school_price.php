<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$object = new master;
	$id = $_REQUEST['id'];
	$school_data = $object->getSingleShool($id);
	$termList = $object->getTermList();
?>

<?php
if(isset($_POST['save'])) {
$data = $_POST;
$school_id = $data['school_id'];
$status = $object->saveRate($school_id,$data);
if($status == true) {
	echo "<center><h1>Your Price Rate Saved Succesfully.</h1></center>";
}
else {
	echo "<center><h1>Error Occured Price Not Saved Please Try Again..</h1></center>";
}
}
else {
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
		var ans = confirm("Are You Want to Set School Rates");
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
        	<h1>Set Price Rate For : <?php echo $school_data['school_name'];?> </h1>
        </td>
    </tr>
    <tr>
    	<td align="right" class="add_school" width="50%">
        	Rate Boys ( Std 1-4 ) :
        </td>	
        <td width="50%">
        	<input type="text" name="male_slab1" />
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	Rate Girls ( Std 1-4 ) :
        </td>	
        <td>
        	<input type="text" name="female_slab1" />
        </td>	
    </tr>
     <tr>
    	<td align="right" class="add_school">
        	Rate Boys( Std 5-8 ) :
        </td>	
        <td>
        	<input type="text" name="male_slab2" />
        </td>	
    </tr>
     <tr>
    	<td align="right" class="add_school">
        	Rate Girls ( Std 5-8 ) :
        </td>	
        <td>
        	<input type="text" name="female_slab2" />
        </td>	
    </tr>
     <tr>
    	<td align="right" class="add_school">
        	Rate Boys( Std 9-12 ) :
        </td>	
        <td>
        	<input type="text" name="male_slab3" />
        </td>	
    </tr>
     <tr>
    	<td align="right" class="add_school">
        	Rate Girls ( Std 9-12 ) :
        </td>	
        <td>
        	<input type="text" name="female_slab3" />
        </td>	
    </tr>
    <tr>
    	<td align="right" width="50%" class="add_student">
        	Select Term :
    	</td>
        <td>
        	<select name="term">
            <?php
				foreach($termList as $term)
				{
				?>
               	<option value="<?php echo $term['0'];?>">
                 <?php echo $term['0'];?> 
                 </option>
			    <?php
				}
			?>
            </select>
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
   	<td colspan="2" align="center">
    <input type="hidden" name="skey" id="skey" value="<?php echo $key;?>" />
    	<input type="hidden" name="school_id" value="<?php echo $id;?>" />
    	<input type="submit" name="save" value="Set Price" />
        <input type="reset" name="reset" value="Reset" />
    </td>
   </tr>
</table>
</form>
<?php
}
?>