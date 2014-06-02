<html>
	<head>
    <title>Inventory Managment System </title>
<style>

table {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
table th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
table tr {background-color:#ffffff;}
table td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
table tr:hover {background-color:#ffff99;}

a {font-size:14px; font-weight:bold; color: rgba(203,96,179,1); text-decoration:none;}
a:hover {font-size:14px; font-weight:bold;  color: rgba(203,96,179,1); text-decoration:none;}

.home{ color:#5235D9; font-weight:bold;}
.topmenu {font-size:15px; color: rgba(73,155,234,1);}
.topmenu:hover {font-size:15px; color : #1074e0;}

.btn{
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

input[type="submit"]{ background: #e3baff;
  background-image: -webkit-linear-gradient(top, #e3baff, #3f8ab8);
  background-image: -moz-linear-gradient(top, #e3baff, #3f8ab8);
  background-image: -ms-linear-gradient(top, #e3baff, #3f8ab8);
  background-image: -o-linear-gradient(top, #e3baff, #3f8ab8);
  background-image: linear-gradient(to bottom, #e3baff, #3f8ab8);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;}
  
  input[type="reset"]{ background: #e3baff;
  background-image: -webkit-linear-gradient(top, #e3baff, #3f8ab8);
  background-image: -moz-linear-gradient(top, #e3baff, #3f8ab8);
  background-image: -ms-linear-gradient(top, #e3baff, #3f8ab8);
  background-image: -o-linear-gradient(top, #e3baff, #3f8ab8);
  background-image: linear-gradient(to bottom, #e3baff, #3f8ab8);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;}

input[type="submit"]:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

input[type="reset"]:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
</head>
<body style="background:rgba(179,220,237,1);">
<?php
if($_SESSION['login'] != true) {
			header("location:index.php");
		}
?>
<table  align="center" border="0">
	<tr>
    	<th class="menu">
        	<a href="home.php" class="topmenu">
            	Home
            </a>
        </th>
        <td>
        	&nbsp; || &nbsp;
        </th>
        <th class="menu">
        	<a href="school_list.php"  class="topmenu">
            	School List
            </a>
        </th>
        <td>
        	&nbsp; || &nbsp;
        </td>
         <th class="menu">
        	<a href="job.php"  class="topmenu">
            	Job Order
            </a>
        </td>
        <td>
        	&nbsp; || &nbsp;
        </td>
         <th class="menu">
        	<a href="view_students.php"  class="topmenu">
            	View Student
            </a>
        </td>
        <td>
        	&nbsp; || &nbsp;
        </td>
        <th class="menu">
        	<a href="add_students.php"  class="topmenu">
            	Create Student List
            </a>
        </td>
        <td>
        	&nbsp; || &nbsp;
        </td>
         <th class="menu">
        	<a href="size_chart.php"  class="topmenu">
            	Size Chart
            </a>
        </th>
        <td>
        	&nbsp; || &nbsp;
        </td>
        <th class="menu">
        	<a href="student_list.php"  class="topmenu">
            	Student List
            </a>
        </th>
        
        <td>
        	&nbsp; || &nbsp;
        </td>
        <th class="menu">
        	<a href="print_list.php"  class="topmenu">
            	Print List
            </a>
        </th>
        
        <td>
        	&nbsp; || &nbsp;
        </td>
         <th class="menu">
        	<a href="invoice.php"  class="topmenu">
            	Invoice
            </a>
        </th>
        
        <td>
        	&nbsp; || &nbsp;
        </td>
        <th class="menu">
        	<a href="logout.php"  class="topmenu">
            	Log Out
            </a>
        </th>
    </tr>
</table>