<?php
session_start();
error_reporting(0);
class master {
	function __construct() {
		$con = mysql_connect("localhost","root","");
		mysql_select_db("shivam_dress",$con);
	}
	public function pagination($count,$perpage)
	{
		$nr = $count;
		if (isset($_GET['pn'])) { 
			$pn =  $_GET['pn'];
		} else { 
    		$pn = 1;
		}
		$itemsPerPage = $perpage;
		
		$lastPage = ceil($nr / $itemsPerPage);
		if ($pn < 1) { 
			$pn = 1; 
		} else if ($pn > $lastPage) { 
			$pn = $lastPage;
		}
		$paginationDisplay = "";
		$centerPages = "";
		$sub1 = $pn - 1;
		$sub2 = $pn - 2;
		$add1 = $pn + 1;
		$add2 = $pn + 2;
		$url = $_SERVER['PHP_SELF'];
		if ($pn == 1) {
			$centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
			$centerPages .= '&nbsp; <a href="'. $url .'?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
		} else if ($pn == $lastPage) {
			$centerPages .= '&nbsp; <a href="' . $url . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
		} else if ($pn > 2 && $pn < ($lastPage - 1)) {
			$centerPages .= '&nbsp; <a href="' . $url . '?pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <a href="' .  $url  . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
			$centerPages .= '&nbsp; <a href="' .  $url .  '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <a href="' . $url .  '?pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';
		} else if ($pn > 1 && $pn < $lastPage) {
			$centerPages .= '&nbsp; <a href="' .  $url  . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
			$centerPages .= '&nbsp; <a href="' . $url . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
			}
			$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage;
	if ($lastPage != "1"){
    $paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
    if ($pn != 1) {
        $previous = $pn - 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $url . '?pn=' . $previous . '"> Back</a> ';
    }
    
    $paginationDisplay .= '<span class="paginationNumbers">' . $centerPages . '</span>';
    
    if ($pn != $lastPage) {
        $nextPage = $pn + 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next</a> ';
    }
		$data['limit'] = $limit;	
		$data['paginationDisplay'] = $paginationDisplay;	
		return $data;
		}
	}
	
	public function getCount($table)
	{
		$query = "SELECT * from $table where status = 'Y'";
		$result = mysql_num_rows(mysql_query($query));
		return $result;
	}
	
	public function getSchoolList($filter,$column=null,$order=null,$limit) {
		if(empty($order)) {
		$order = "desc";
		}
		
		if(empty($column)) {
		$column = "id";
		}
		
		$query = "SELECT * FROM school_details
				 where
				 status = 'Y' order by $column $order $limit ";
		if(!empty($filter)) {
		$query = "SELECT * FROM school_details where
				  school_name like '%$filter%' 
				  OR
				  person_name like '%$filter%' 
				  OR 
				  contact_number like '%$filter%' 
				  AND
				  status = 'Y' order by $column $order $limit ";
		}
		$result = mysql_query($query);
		$count = mysql_num_rows($result);
		if($count < 1 ) {
			return "No Found Records";
		}
		while($row = mysql_fetch_assoc($result)) {
			$data[] = array($row['id'],$row['school_name'],$row['person_name'],
							$row['contact_number']
							);
		}
		return $data;
	}
	
	function saveSchool($data) 
	{
		$school = $data['school_name'];
		$person = $data['person_name'];
		$address = $data['address'];
		$contact = $data['contact_number'];
		$mobile = $data['other_contact'];
		$email = $data['emailid'];
		$rate = $data['rate'];
		$query = "INSERT INTO 	school_details
				 	(id,school_name,person_name,address,contact_number,
					 other_contact,emailid,status,created
					 )	
					 values
					 (
					 '',
					 '$school',
					 '$person',
					 '$address',
					 '$contact',
					 '$mobile',
					 '$email',
					 'Y',
					 NOW()					 
					 )
				 ";
	$result = mysql_query($query);
	return $result;				 
	}

	function deleteSchool($id)
	{
		$query = "UPDATE school_details
				 SET status = 'N'
				 where id = '$id'
				 ";
		if(mysql_query($query)) {
			return true;
		}
		else{
			return false;
		}
	}
	
	public function getSingleShool($id)
	{
		$query = "SELECT * FROM school_details where status ='Y' and id ='$id'";
		$result = mysql_query($query);
		$data = mysql_fetch_assoc($result);
		return $data;
	}
	
	public function getSchoolIdByName($school_name)
	{
		$query = "SELECT id from school_details where school_name = '$school_name' ";
		$result = mysql_query($query);
		$schoolId = mysql_fetch_assoc($result);
		$id = $schoolId['id'];
		return $id;
	}
	
	public function query($query)
	{
		$result = mysql_query($query);
		return $result;
	}	
	
	public function getStudentBySchoolIdCondition($school_id,$term)
	{
		$query = "SELECT * FROM student_details 
				  where school_id = '$school_id'
				  AND
				  student_term = '$term'
				  order by student_size
				  ";
		//print $query;
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result))
		{
			$data[] = array($row['id'],$row['student_sr'],$row['student_name'],
							$row['student_class'],$row['student_division'],
							$row['student_gender'],$row['student_size'],
							$row['student_term'],$row['student_status']
							);
		}
		return $data;
	}
	
	public function getStudentBySchoolIdConditionByOrder($school_id,$term)
	{
		$query = "SELECT * FROM student_details 
				  where school_id = '$school_id'
				  AND
				  student_term = '$term'
				  order by student_sr
				  ";
		//print $query;
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result))
		{
			$data[] = array($row['id'],$row['student_sr'],$row['student_name'],
							$row['student_class'],$row['student_division'],
							$row['student_gender'],$row['student_size'],
							$row['student_term'],$row['student_status']
							);
		}
		return $data;
	}
	
	
	
	public function getStudentBySchoolIdTermStdDivision($school_id,$student_class,$student_division,$term)
	{
		$query = "SELECT * FROM student_details
			  where
			  school_id = '$school_id'
			  AND
			  student_class = '$student_class'
			  AND
			  student_division = '$student_division'
			  AND
			  student_term =  '$term'
			 ";
		//print $query;
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result))
		{
			$data[] = array($row['id'],$row['student_sr'],$row['student_name'],
							$row['student_class'],$row['student_division'],
							$row['student_gender'],$row['student_size'],
							$row['student_term'],$row['student_status']
							);
		}
		return $data;
	}
	
	public function demo($school_id)
	{
		$query = "Select count(id) as 'total_pieces' , student_size ,
					student_class from student_details
					where school_id = '$school_id'
					group by student_size,student_class
				 ";
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result))
		{
			$data[] = array($row['total_pieces'],$row['student_size'],
							$row['student_class']
							);
		}
		return $data;
	}
	
	public function getTermList() {
		$query = "SELECT distinct(student.student_term) as 'term'
					FROM student_details as student
					LEFT JOIN
					school_details as school
					ON
					school.id=student.school_id
				";
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result)) {
			$term[] = array($row['term']);
		}
		return $term;
	}
	
	public function saveRate($school_id,$data)
	{
		$term = $data['term'];
		$male_slab1 = $data['male_slab1'];
		$male_slab1 = $data['male_slab1'];
		$male_slab2 = $data['male_slab2'];
		$male_slab3 = $data['male_slab3'];
		$female_slab1 = $data['female_slab1'];
		$female_slab2 = $data['female_slab2'];
		$female_slab3 = $data['female_slab3'];
		
		
		$query = "INSERT INTO price_rate 
					(id,school_id,school_term,male_slab1,male_slab2,male_slab3,
					female_slab1,female_slab2,female_slab3,status,created)
					Values
					('','$school_id',
					'$term',
					'$male_slab1',
					'$male_slab2',
					'$male_slab3',
					'$female_slab1',
					'$female_slab2',
					'$female_slab3',
					'Y',
					NOW()
					)
				 ";
		$result = mysql_query($query);
		return $result;
	}
	
	public function getRate($school_id,$student_term)
	{
		$query = "SELECT * FROM price_rate where 
					school_id = '$school_id'
					AND
					school_term = '$student_term'
					order by id desc
				";
		$result = mysql_query($query);
		$rateData = mysql_fetch_assoc($result);
		return $rateData;
	}	
	
	public function getSchoolRate($school_id)
	{
		$query = "SELECT * FROM price_rate where 
					school_id = '$school_id'
					AND 
					status = 'Y'
					group by school_term
					order by id desc
				";
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result)) {
		$rateData[] = array($row['school_term'],
							$row['male_slab1'],$row['male_slab2'],
							$row['male_slab3'],$row['female_slab1'],
							$row['female_slab2'],$row['female_slab3'],$row['id']);
		}
		return $rateData;
	}
	
	public function getStudentById($id)
	{
		$query = "SELECT * FROM student_details where id = '$id'";
		$result = mysql_query($query);
		$student = mysql_fetch_assoc($result);
		return $student;
	}	
	
	public function getTermForSchool($school_id)
	{
		$query = "SELECT distinct(student_term) FROM student_details WHERE school_id = '$school_id'";
		$result = mysql_query($query);
		$term = mysql_fetch_assoc($result);
		return $term;
	}
	
}
?>