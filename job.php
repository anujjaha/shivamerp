<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
?>
<script type="text/javascript">
function check()
{
	var key = document.getElementById("key").value;
	var skey = document.getElementById("skey").value;
	if(key == "")
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
	else
	{
		return true;
	}
}
</script>
<br><br>
<table align="center" border="1" rules="all" width="80%">
<form action="save_job.php" method="post" onsubmit="return check()">

	<tr>
    	<td colspan="2" align="center">
        	<h2> Job Order </h2>
        </td>	
    </tr>
    <tr>
    	<td colspan="2" align="right">
        	Date : <input type="text" name="odate">
        </td>	
    </tr>
    <tr>
    	<td width="30%">
        	School Name :
        </td>
        <td width="70%">
        	<input type="text" name="school" style="width:400px;" /> 
        </td>
    </tr>
    <tr>
    	<td>
        	Contact Person :
        </td>
        <td>
        	<input type="text" name="person" style="width:400px;"/> 
        </td>
    </tr>
    <tr>
    	<td>
        	Mobile Number :
        </td>
        <td>
        	<input type="text" name="mob" style="width:400px;"/>
        </td>
    </tr>
    
    <tr>
    	<td>
        	Top & Shirt Order No. :
        </td>
        <td>
        	<input type="text" name="order" style="width:400px;"/>
        </td>
    </tr>
    
    <tr>
    	<td>
        	Matching Color :
        </td>
        <td>
        	<input type="text" name="color" style="width:400px;"/>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        <hr />
        </td>
    </tr>
    
    <tr>
    	<td colspan="2">
        <h2>Boys</h2>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<table align="center" border="1" rules="all">
            	<tr>
                	<th>No.</th>
                    <th>Particulars</th>
                    <th>Option</th>
                    <th>Rate</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                	<td>1.</td>
                    <td>Pents/Shirts</td>
                    <td>
                    <label><input type="radio" name="b1" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b1" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r1" />
                    </td>
                    <td>
                    	<input type="text" name="rm1" style="width:400px;" />
                    </td>
                </tr>
                
                <tr>
                	<td>2.</td>
                    <td>Belt</td>
                    <td>
                    <label><input type="radio" name="b2" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b2" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r2" />
                    </td>
                    <td>
                    	<input type="text" name="rm2" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>3.</td>
                    <td>I-Card</td>
                    <td>
                    <label><input type="radio" name="b3" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b3" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r3" />
                    </td>
                    <td>
                    	<input type="text" name="rm3" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>4.</td>
                    <td>Tai</td>
                    <td>
                    <label><input type="radio" name="b4" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b4" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r4" />
                    </td>
                    <td>
                    	<input type="text" name="rm4" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>5.</td>
                    <td>Shoes</td>
                    <td>
                    <label><input type="radio" name="b5" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b5" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r5" />
                    </td>
                    <td>
                    	<input type="text" name="rm5" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>6.</td>
                    <td>Photo</td>
                    <td>
                    <label><input type="radio" name="b6" value="Yes"/>Yes</label>
                    <label><input type="radio" name="b6" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="r6" />
                    </td>
                    <td>
                    	<input type="text" name="rm6" style="width:400px;" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr>
    	<td colspan="2">
        <h2>Girls</h2>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<table align="center" border="1" rules="all">
            	<tr>
                	<th>No.</th>
                    <th>
                   	Particulars
                    </th>
                    <th>Option</th>
                    <th>Rate</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                	<td>1.</td>
                    <td> <select name="gtype">
                    	<option> Salvar Top </option>
                        <option> Pina Frock </option>
                        <option> Gelish </option>
                    </select></td>
                    <td>
                    <label><input type="radio" name="fb1" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb1" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr1" />
                    </td>
                    <td>
                    	<input type="text" name="frm1" style="width:400px;" />
                    </td>
                </tr>
                
                <tr>
                	<td>2.</td>
                    <td>Belt</td>
                    <td>
                    <label><input type="radio" name="fb2" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb2" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr2" />
                    </td>
                    <td>
                    	<input type="text" name="frm2" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>3.</td>
                    <td>I-Card</td>
                    <td>
                    <label><input type="radio" name="fb3" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb3" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr3" />
                    </td>
                    <td>
                    	<input type="text" name="frm3" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>4.</td>
                    <td>Tai</td>
                    <td>
                    <label><input type="radio" name="fb4" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb4" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr4" />
                    </td>
                    <td>
                    	<input type="text" name="frm4" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>5.</td>
                    <td>Shoes</td>
                    <td>
                    <label><input type="radio" name="fb5" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb5" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr5" />
                    </td>
                    <td>
                    	<input type="text" name="frm5" style="width:400px;" />
                    </td>
                </tr>
                
                 <tr>
                	<td>6.</td>
                    <td>Photo</td>
                    <td>
                    <label><input type="radio" name="fb6" value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb6" value="No"/>No</label>
                    </td>
                    <td>
                    	<input type="text" name="fr6" />
                    </td>
                    <td>
                    	<input type="text" name="frm6" style="width:400px;" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
	<tr>
		<td align="right">
			Security Key :
		</td>
		<td>
			<span style="color:#FF0000; font-size:24px;font-weight:bold;">
			<?php
			$key = rand(1,9);
			echo $key;
			?>
			</span>
			<input type="text" name="key" id="key" maxlength="2" style="width:44px;"/>
		</td>
	</tr>
    <tr>
    	<td colspan="2" align="center">
    	
        	<!--<input type="hidden" name="odate" value=" <?php //echo date('d-m-Y');?>" />-->
			<input type="hidden" name="skey" id="skey" value="<?php echo $key;?>"/>
        	<input type="submit" name="save" value="Save and Print Job Order" />
        </td>
    </tr>
</form>
</table>
