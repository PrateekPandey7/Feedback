<?php

	$file_open = fopen("FeedbackForm.csv","a");
	$no_rows = count(file("FeedbackForm.csv"));
	$allfaculty = '('.$faculty1.'-'.$facultyrating1.')'.'('.$faculty2.'-'.$facultyrating2.')'.'('.$faculty3.'-'.$facultyrating3.')'.'('.$faculty4.'-'.$facultyrating4.')';
	$topicuseful = '('.$topicuseful1.'- By -'.$topicusefulby1.')' .'('.$topicuseful2.'- By -'.$topicusefulby2.')' .'('.$topicuseful3.'- By -'.$topicusefulby3.')' .'('.$topicuseful4. '- By -'.$topicusefulby4.')';
	$topicnotuseful = '('.$topicnotuseful1.'- By -'.$topicnotusefulby1.')' .'('.$topicnotuseful2.'- By -'.$topicnotusefulby2.')' .'('.$topicnotuseful3.'- By -'.$topicnotusefulby3.')' .'('.$topicnotuseful4. '- By -'.$topicnotusefulby4.')'; 
	$form_data = array(
		'programme' => $programme,
		'duration' => $duration,
		'coordinator' => $coordinator,
		'name' => $name,
		'designation' => $designation,
		'organization' => $organization,
		'mobile' => $mobile,
		'nationality' => $nationality,
		's1' => $s1,
		's2' => $s2,
		's3' => $s3,
		'topicuseful' => $topicuseful,
		'topicnotuseful' => $topicnotuseful,
		'newtopic' => '',
		'allfaculty' => $allfaculty,
		'sa' => $sa,
		'sb' => $sb,
		'sc' => $sc,
		'sd' => $sd,
		'se' => $se,
		's6' => $s6,
		's7' => $s7,
		'remark' => $remark,
		'extra' => $extra,
		);
	fputcsv($file_open,$form_data);

?>