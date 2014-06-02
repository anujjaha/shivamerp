<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
?>
<?php
	$school_name = $_POST['school'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_term = $_POST['student_term'];
	$student_class = $_POST['class'];
	$student_division = $_POST['division'];
	$num_students = $_POST['num_students'];
?>
<script>
function check() 
{
	var key = document.getElementById("key").value;
	var skey = document.getElementById("skey").value;
	if(key == null) 
	{	
		alert("Please Provide Security Key");
		document.getElementById("key").focus();
		return false;
	}
	else if(key != skey)
	{
		alert("Please Provide Valid Security Key");
		document.getElementById("key").value = "";
		document.getElementById("key").focus();
		return false;
	}
	else {
	return true;
	}
}
</script>
<table align="center" border="2" width="90%">
	<tr>
    	<td colspan="2" align="center" class="create_students">
        	<h1> School Name : <?php echo $school_name;?> </h1>
        </td>
    </tr>
    <tr>
    	<td align="left" class="create_students">
        	Student Class : <strong> <?php echo $student_class;?> </strong>
        </td>
        <td align="right" class="create_students">
        	Student Division : <strong> <?php echo $student_division;?> </strong>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<table align="center" border="2" width="100%">
            	<tr>
                	<td width="10%">Roll Number</td>
                    <td width="60%">Student Name</td>
                    <td width="15%">Gender</td>
                    <td width="15%">Size</td>
                </tr>
       </table>
       </td>
    </tr>
  </table>
<form action="save_students.php" method="post" onsubmit="return check()">
<?php
	include('tem.php');
?>		
	Security Key : 
	<span style="color:red;font-size:18px;">
	<?php $key = rand(11,99);
	echo $key;?>	
	</span>
	<input type="text"  name="key" id="key" maxlength="2" style="width:40px;">
        <input type="hidden" name="student_class" value="<?php echo $student_class;?>" />
        <input type="hidden" name="student_term" value="<?php echo $student_term;?>" />
        <input type="hidden" name="school_id" value="<?php echo $school_id;?>" />
        <input type="hidden" name="student_division" value="<?php echo $student_division;?>" />
        <input type="hidden" name="nums_students" value="<?php echo $num_students;?>" />
         <input type="hidden" name="skey" id="skey" value="<?php echo $key;?>" />
        <input type="submit" name="Save" value="Save Students" />
</form>
<?php
/*
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script>
$(function() {

$( "#sortable" ).sortable();

});
</script>
<?php
	$school_name = $_POST['school'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_term = $_POST['student_term'];
	$student_class = $_POST['class'];
	$student_division = $_POST['division'];
	$num_students = $_POST['num_students'];
?>
<table align="center" border="2" width="90%">

	<tr>
    	<td colspan="2" align="center" class="create_students">
        	<h1> School Name : <?php echo $school_name;?> </h1>
        </td>
    </tr>
    <tr>
    	<td align="left" class="create_students">
        	Student Class : <strong> <?php echo $student_class;?> </strong>
        </td>
        <td align="right" class="create_students">
        	Student Division : <strong> <?php echo $student_division;?> </strong>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<table align="center" border="2" width="100%">
            	<tr>
                	<td width="10%">Roll Number</td>
                    <td width="60%">Student Name</td>
                    <td width="15%">Gender</td>
                    <td width="15%">Size</td>
                </tr>
                <form action="save_students.php" method="post">
                <ul id="sortable">
                <?php
				for($i=1;$i<=$num_students;$i++)
				{
				?>
                	<li class="ui-state-default">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="student_name[<?php echo $i;?>]"  />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="student_gender[<?php echo $i;?>]">
                        	<option> Male </option>
                            <option> Female </option>
                        </select>
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="student_size[<?php echo $i;?>]" >
                        	<option> 22 </option>
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
</li>
                <?php
				}
				?>
                </ul>
            </table>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center" >
        	<input type="hidden" name="student_class" value="<?php echo $student_class;?>" />
            <input type="hidden" name="student_term" value="<?php echo $student_term;?>" />
            <input type="hidden" name="school_id" value="<?php echo $school_id;?>" />
           	<input type="hidden" name="student_division" value="<?php echo $student_division;?>" />
            <input type="hidden" name="nums_students" value="<?php echo $num_students;?>" />
        	<input type="submit" name="Save" value="Save Students" />
            
        </td>
    </tr>
</form>
</table>*/?>