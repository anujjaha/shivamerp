<style type="text/css">
table {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
table th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
table tr {background-color:#d4e3e5;}
table td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
table tr:hover {background-color:#ffffff;}

.background: #6db3f2; /* Old browsers */
.background: -moz-linear-gradient(top, #6db3f2 0%, #54a3ee 50%, #1e69de 100%); /* FF3.6+ */
.background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6db3f2), color-stop(50%,#54a3ee), color-stop(100%,#1e69de)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #6db3f2 0%,#54a3ee 50%,#1e69de 100%); /* Chrome10+,Safari5.1+ */
.background: -o-linear-gradient(top, #6db3f2 0%,#54a3ee 50%,#1e69de 100%); /* Opera 11.10+ */
.background: -ms-linear-gradient(top, #6db3f2 0%,#54a3ee 50%,#1e69de 100%); /* IE10+ */
.background: linear-gradient(to bottom, #6db3f2 0%,#54a3ee 50%,#1e69de 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=0 ); /* IE6-9 */
</style>
<body style="background:rgba(179,220,237,1);">
<table align="center" border="2">
<form action="ck.php" method="post">
	<?php
	if(!empty($_REQUEST['status'])) {
	?>
    	<tr>
        	<td colspan="2" align="center">
            	User name Password Unvalid
            </td>
        </tr>
    <?php
	}
	?>
    <tr>
    	<td colspan="2" align="center">
        	<h1>Log In </h1>
        </td>
    </tr>
	<tr>
    	<td align="right">
        	Enter User Name : 
        </td>
        <td>
        	<input type="text" name="username" />
        </td>
    </tr>
	<tr>
    	<td align="right">
        	Enter Password : 
        </td>
        <td>
        	<input type="password" name="password" />
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        	<input type="submit" name="Login" value="Login" />
            <input type="reset" name="Reset" value="Reset" />
        </td>
    </tr>
</table>