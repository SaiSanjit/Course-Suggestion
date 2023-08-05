<?php
include('database_connection.php');
if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM testing1 WHERE course_status = '1'
	";
	
	if(isset($_POST["course_skill"]))
	{
		$course_skill_filter = implode("','", $_POST["course_skill"]);
		$query .= "
		 AND course_skill IN('".$course_skill_filter."')
		";
	}
	if(isset($_POST["course_language"]))
	{
		$course_language_filter = implode("','", $_POST["course_language"]);
		$query .= "
		 AND course_language IN('".$course_language_filter."')
		";
	}
	if(isset($_POST["course_level"]))
	{
		$course_level_filter = implode("','", $_POST["course_level"]);
		$query .= "
		 AND course_level IN('".$course_level_filter."')
		";
	}
	if(isset($_POST["price_range"]))
	{
		$price_range_filter = implode("','", $_POST["price_range"]);
		$query .= "
		 AND price_range IN('".$price_range_filter."')
		";
	}
	
	if(isset($_POST["duration_range"]))
	{
		$duration_range_filter = implode("','", $_POST["duration_range"]);
		$query .= "
		 AND duration_range IN('".$duration_range_filter."')
		";
	}
	if(isset($_POST["course_certification"]))
	{
		$course_certification_filter = implode("','", $_POST["course_certification"]);
		$query .= "
		 AND course_certification IN('".$course_certification_filter."')
		";
		
	}
	
	if(isset($_POST["course_provider"]))
	{
		$course_provider_filter = implode("','", $_POST["course_provider"]);
		$query .= "
		 AND course_provider IN('".$course_provider_filter."')
		";
	}
	
	if(isset($_POST["course_rating"]))
	{
		$course_rating_filter = implode("','", $_POST["course_rating"]);
		$query .= "
		 AND course_rating IN('".$course_rating_filter."')
		";
	}
	
	if(isset($_POST["course_coding_language"]))
	{
		$course_coding_language = implode("','", $_POST["course_coding_language"]);
		$query .= "
		 AND course_coding_language IN('".$course_coding_language."')
		";
	}



	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
				<a href='.$row['course_url'].' >
				<img src="image/'. $row['course_image'] .'" alt="" class="img-responsive" >
				  <h4 >   '. $row['course_skill'] .'  <br /> </h4>
				  <h5 style="color: red">   '. $row['course_name'] .'  <br /> </h5>
				  <h5 >   '. $row['course_level'] .' <br /> </h5> 
				  <h5 >   '. $row['course_duration'] .' <br /> </h5> 
				  <h5 >   '. $row['course_price'] .'  <br /> </h5> 			
				  <h6 >	Language :In &nbsp'.$row['course_language'].'</p> </h6> 			
				  <h6 >	Source:&nbsp'.$row['course_provider'].'</p><br /> </h6>
				</div>
				</a>
			</div>';}}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
	}
	?>