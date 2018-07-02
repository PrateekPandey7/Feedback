<?php

function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}

$programme = '';$duration = '';$coordinator = '';$name = '';$designation = '';$organization = '';$mobile = '';$s1 = '';$s2 = '';$s3 = '';$topicuseful = '';$topicusefulby = '';$topicnotuseful = '';$topicnotusefulby = '';$newtopic = '';$sno1 = '';$faculty1 = '';$facultyrating1 = '';$sno2 = '';$faculty2 = '';$facultyrating2 = '';$sa = '';$sb = '';
$sc = '';$sd = '';$se = '';$s6 = '';$s7 = '';$remark = '';

if(!empty($_POST["programme"]))
{
    $programme = clean_text($_POST["programme"]);
}
if(!empty($_POST["duration"]))
{
    $duration = clean_text($_POST["duration"]);
}
if(!empty($_POST["coordinator"]))
{
    $coordinator = clean_text($_POST["coordinator"]);
}
if(!empty($_POST["name"]))
{
    $name = clean_text($_POST["name"]);
}
if(!empty($_POST["designation"]))
{
    $designation = clean_text($_POST["designation"]);
}
if(!empty($_POST["organization"]))
{
    $organization = clean_text($_POST["organization"]);
}
if(!empty($_POST["mobile"]))
{
    $mobile = clean_text($_POST["mobile"]);
}
if(!empty($_POST["s1"]))
{
    $s1 = clean_text($_POST["s1"]);
}
if(!empty($_POST["s2"]))
{
    $s2 = clean_text($_POST["s2"]);
}
if(!empty($_POST["s3"]))
{
    $s3 = clean_text($_POST["s3"]);
}
if(!empty($_POST["topicuseful"]))
{
    $topicuseful = clean_text($_POST["topicuseful"]);
}
if(!empty($_POST["topicusefulby"]))
{
    $topicusefulby = clean_text($_POST["topicusefulby"]);
}
if(!empty($_POST["topicnotuseful"]))
{
    $topicnotuseful = clean_text($_POST["topicnotuseful"]);
}
if(!empty($_POST["topicnotusefulby"]))
{
    $topicnotusefulby = clean_text($_POST["topicnotusefulby"]);
}
if(!empty($_POST["newtopic"]))
{
    $newtopic = clean_text($_POST["newtopic"]);
}
if(!empty($_POST["sno1"]))
{
    $sno1 = clean_text($_POST["sno1"]);
}
if(!empty($_POST["sno2"]))
{
    $sno2 = clean_text($_POST["sno2"]);
}
if(!empty($_POST["faculty1"]))
{
    $faculty1 = clean_text($_POST["faculty1"]);
}
if(!empty($_POST["faculty2"]))
{
    $faculty2 = clean_text($_POST["faculty2"]);
}
if(!empty($_POST["facultyrating1"]))
{
    $facultyrating1 = clean_text($_POST["facultyrating1"]);
}
if(!empty($_POST["facultyrating2"]))
{
    $facultyrating2 = clean_text($_POST["facultyrating2"]);
}
if(!empty($_POST["sa"]))
{
    $sa = clean_text($_POST["sa"]);
}
if(!empty($_POST["sb"]))
{
    $sb = clean_text($_POST["sb"]);
}
if(!empty($_POST["sc"]))
{
    $sc = clean_text($_POST["sc"]);
}
if(!empty($_POST["sd"]))
{
    $sd = clean_text($_POST["sd"]);
}
if(!empty($_POST["se"]))
{
    $se = clean_text($_POST["se"]);
}
if(!empty($_POST["s6"]))
{
    $s6 = clean_text($_POST["s6"]);
}
if(!empty($_POST["s7"]))
{
    $s7 = clean_text($_POST["s7"]);
}
if(!empty($_POST["remark"]))
{
    $remark = clean_text($_POST["remark"]);
}


$stringfile = 'FeedbackForms/'.$name.'.pdf';
//include 'excel.php';
include 'formtopdf.php';
//include 'generateReport.php';
header('Location: confirmation.php?name='.urlencode($stringfile));

?>