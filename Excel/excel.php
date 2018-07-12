<?php	
	$filename = 'Excel/'.'('.$pn.')'.'.csv';
	if(file_exists($filename) == 0)
	{
		$file_open = fopen($filename,"a");
		$form_data = array(
		'name' => 'Name',
		'designation' => 'Designation',
		'organization' => 'Organization',
		'mobile' => 'Mobile',
		'email' => 'Email',
		's1' => 'To what extent is this programme useful to you in your job or personal growth?',
		's2' => 'How far have you been benefited from interaction with the fellow participants?',
		's3' => 'How was the quality and utility of course material and lecture notes circulated?',
		's4' => 'What was the level of learning outcome of this program?',
		'level' => 'DesignationLevel',
		'type' => 'OrganizationType',
		'topicuseful' => 'Topicuseful',
		'topicnotuseful' => 'Topicnotuseful',
		'allfaculty' => 'FacultyRating',
		'sa' => 'Accommodation',
		'sb' => 'Food',
		'sc' => 'Room Service & other Hotel facilities',
		'sd' => 'Folder & writing material',
		'se' => 'Administrative arrangement of NPC',
		's6' => 'Whether Audio-Visual aids were used?',
		's7' => 'Your Overall impression of the course',
		'remark' => 'Remark',
		'extra' => 'Extra',
		);
		fputcsv($file_open,$form_data);
	}
	$file_open = fopen($filename,"a");
	$no_rows = count(file($filename));
	$allfaculty = '('.$faculty1.'-'.$facultyrating1.')'.'('.$faculty2.'-'.$facultyrating2.')'.'('.$faculty3.'-'.$facultyrating3.')'.'('.$faculty4.'-'.$facultyrating4.')';
	$topicuseful = '('.$topicuseful1.'- By -'.$topicusefulby1.')' .'('.$topicuseful2.'- By -'.$topicusefulby2.')' .'('.$topicuseful3.'- By -'.$topicusefulby3.')' .'('.$topicuseful4. '- By -'.$topicusefulby4.')';
	$topicnotuseful = '('.$topicnotuseful1.'- By -'.$topicnotusefulby1.')' .'('.$topicnotuseful2.'- By -'.$topicnotusefulby2.')' .'('.$topicnotuseful3.'- By -'.$topicnotusefulby3.')' .'('.$topicnotuseful4. '- By -'.$topicnotusefulby4.')'; 
	$form_data = array(
		'name' => $name,
		'designation' => $designation,
		'organization' => $organization,
		'mobile' => $mobile,
		'email' => $email,
		's1' => $s1,
		's2' => $s2,
		's3' => $s3,
		's4' => $s4,
		'level' => $level,
		'type' => $type,
		'topicuseful' => $topicuseful,
		'topicnotuseful' => $topicnotuseful,
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