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
<table align="center" border="2" width="90%">
<form action="save_students.php" method="post">
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
                <?php
				for($i=1;$i<=$num_students;$i++)
				{
				?>
                	<tr>
                	<td width="10%"><?php echo $i;?></td>
                    <td width="60%">
                    	<input type="text" name="student_name[<?php echo $i;?>]" />
                    </td>
                    <td width="15%">
                    	<select name="student_gender[<?php echo $i;?>]">
                        	<option value="Male"> Boy </option>
                            <option value="Female"> Girl</option>
                        </select>
                    </td>
                    <td width="15%">
                    	<select name="student_size[<?php echo $i;?>]">
                        	<option> 20 </option>
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
                    </td>
                </tr>
                <?php
				}
				?>
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
</table>