<?php

	$file_open = fopen("FeedbackForm.csv","a");
	$no_rows = count(file("FeedbackForm.csv"));
	$form_data = array(
		'programme' => $programme,
		'duration' => $duration,
		'coordinator' => $coordinator,
		'name' => $name,
		'designation' => $designation,
		'organization' => $organization,
		'mobile' => $mobile,
		's1' => $s1,
		's2' => $s2,
		's3' => $s3,
		'topicuseful' => $topicuseful,
		'topicusefulby' => $topicusefulby,
		'topicnotuseful' => $topicnotuseful,
		'topicnotusefulby' => $topicnotusefulby,
		'newtopic' => $newtopic,
		'sno1' => $sno1,
		'faculty1' => $faculty1,
		'facultyrating1' => $facultyrating1,
		'sno2' => $sno2,
		'faculty2' => $faculty2,
		'facultyrating2' => $facultyrating2,
		'sa' => $sa,
		'sb' => $sb,
		'sc' => $sc,
		'sd' => $sd,
		'se' => $se,
		's6' => $s6,
		's7' => $s7,
		'remark' => $remark,
		);
	fputcsv($file_open,$form_data);

?>