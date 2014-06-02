<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
	$schoolList = $obj->getSchoolList();
	
?>
<table align="center" border="2">
<form action="create_students.php" method="post">
	<tr>
    	<td align="right" class="add_student">
        	Select School :
    	</td>
        <td>
        	<select name="school">
            <?php
				foreach($schoolList as $school)
				{
				?>
               	<option value="<?php echo $school['1'];?>">
                 <?php echo $school['1'];?> 
                 </option>
			    <?php
				}
			?>
            </select>
        </td>
    </tr>
    <tr>
    	<td align="right" class="add_student">
        	Select Class :
    	</td>
        <td>
        	<select name="class">
           		<option>1</option>
            	<option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td align="right" class="add_student">
        	Select Division :
    	</td>
        <td>
        	<select name="division">
            	<option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
            </select>
        </td>
    </tr>
     <tr>
    	<td align="right" class="add_student">
        	Enter Student Term :
    	</td>
        <td>
        	<input type="text" name="student_term" value="<?php echo date('M');?>-<?php echo date('Y');?>" />
        </td>
    </tr>
    <tr>
    	<td align="right" class="add_student">
        	Enter Numbers of Student :
    	</td>
        <td>
        	<input type="text" name="num_students" />
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center" class="add_student">
        	<input type="submit"  name="save" value="Create Student List" />
            <input type="reset" name="reset" value="Reset" />
        </td>
    </tr>
</form>
</table>