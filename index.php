<?php 
include('database_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="bindu">
    <title>Course Filtration</title>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Two CSS files This is for overall outlook -->
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body >
    <div class="container">
        <div class="row">
        	<br />
        	<marquee> <h2 align="center">PERSONALIZED COURSE SPECIFICATION BASED ON LEARNER SPECIFICATIONS Developed By D2 Team</h2> </marquee>
        	<br />

            <div class="col-md-3">                				
							
                <div class="list-group">
					<h3>Skill</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT(course_skill) FROM testing1 WHERE course_status = '1' ORDER BY id ASC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector course_skill" value="<?php echo $row['course_skill']; ?>"  > <?php echo $row['course_skill']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
                
                <div class="list-group">
					<h3>Coding Language</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                    
					<?php
                    $query = "
                    SELECT DISTINCT(course_coding_language) FROM testing1 WHERE course_status = '1' ORDER BY course_coding_language ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    // It just fetched internally 
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector course_coding_language" value="<?php echo $row['course_coding_language']; ?>"  > <?php echo $row['course_coding_language']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                    </div>
                </div>
               


				<div class="list-group">
					<h3>Language</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                    <?php

                    $query = "
                    SELECT DISTINCT(course_language) FROM testing1 WHERE course_status = '1' ORDER BY course_language ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector course_language" value="<?php echo $row['course_language']; ?>" > <?php echo $row['course_language']; ?> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
                </div>
				
				<div class="list-group">
					<h3>Level</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
                    $query = "
                    SELECT DISTINCT(course_level) FROM testing1 WHERE course_status = '1' ORDER BY course_level ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector course_level" value="<?php echo $row['course_level']; ?>"  > <?php echo $row['course_level']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
                </div>

                <div class="list-group">
					<h3>Price Range</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
                    $query = "
                    SELECT DISTINCT(price_range) FROM testing1 WHERE course_status = '1' ORDER BY price_range DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector price_range" value="<?php echo $row['price_range']; ?>"  > <?php echo $row['price_range']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
                </div>

                <div class="list-group">
					<h3>Duration Range</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
                    $query = "
                    SELECT DISTINCT(duration_range) FROM testing1 WHERE course_status = '1' ORDER BY course_duration ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector duration_range" value="<?php echo $row['duration_range']; ?>"  > <?php echo $row['duration_range']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
                </div>
                
                <div class="list-group">
					<h3>Certification</h3>
					<?php
                    $query = "
                    SELECT DISTINCT(course_certification) FROM testing1 WHERE course_status = '1' ORDER BY course_certification ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector course_certification" value="<?php echo $row['course_certification']; ?>"  > <?php echo $row['course_certification']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
                <div class="list-group">
					<h3>Provider</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
                    $query = "
                    SELECT DISTINCT(course_provider) FROM testing1 WHERE course_status = '1' ORDER BY course_provider ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector course_provider" value="<?php echo $row['course_provider']; ?>"  > <?php echo $row['course_provider']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
                </div>
                <div class="list-group">
					<h3>Rating</h3>
					<?php
                    $query = "
                    SELECT DISTINCT(course_rating) FROM testing1 WHERE course_status = '1' ORDER BY course_rating ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector course_rating" value="<?php echo $row['course_rating']; ?>"  > <?php echo $row['course_rating']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>


               


               


            </div>
            
				
            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>

<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>




<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var course_skill = get_filter('course_skill');
        // A string containing a selector expression to match the current set of elements against nnormally
        var course_language = get_filter('course_language');
        var course_level = get_filter('course_level');
        var price_range=get_filter('price_range');
        var duration_range=get_filter('duration_range');
        var course_certification=get_filter('course_certification');
        var course_provider=get_filter('course_provider');
        var course_rating=get_filter('course_rating');
        var course_coding_language=get_filter('course_coding_language');
        
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, course_skill:course_skill, course_language:course_language, course_level:course_level,price_range:price_range,duration_range:duration_range,course_certification:course_certification,course_provider:course_provider,course_rating:course_rating,course_coding_language:course_coding_language},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

});
</script>

</body>

</html>
