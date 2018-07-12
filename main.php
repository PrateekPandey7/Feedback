<?php
$progname = $_GET["name"];
$arr = explode("-", $progname,3);
$nameofprogramme = $arr[0];
$nameofcoordinator = $arr[1];
function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}

$programme = '';$duration = '';$coordinator = '';$name = '';$designation = '';$level = '';$type = '';$organization = '';$mobile = '';$nationality = '';$s1 = '';$s2 = '';$s3 = '';$s4 = '';$topicuseful1 = '';$topicusefulby1 = '';$topicnotuseful1 = '';$topicnotusefulby1 = '';$topicuseful2 = '';$topicusefulby2 = '';$topicnotuseful2 = '';$topicnotusefulby2 = '';$topicuseful3 = '';$topicusefulby3 = '';$topicnotuseful3 = '';$topicnotusefulby3 = '';$topicuseful4 = '';$topicusefulby4 = '';$topicnotuseful4 = '';$topicnotusefulby4 = '';$newtopic = '';$faculty1 = '';$facultyrating1 = '';$faculty2 = '';$facultyrating2 = '';$faculty3 = '';$facultyrating3 = '';$faculty4 = '';$facultyrating4 = '';$sa = '';$sb = '';
$sc = '';$sd = '';$se = '';$s6 = '';$s7 = '';$remark = '';$extra = '';

if(!empty($_POST["duration"]))
{
    $duration = clean_text($_POST["duration"]);
}
if(!empty($_POST["name"]))
{
    $name = clean_text($_POST["name"]);
}
if(!empty($_POST["designation"]))
{
    $designation = clean_text($_POST["designation"]);
}
if(!empty($_POST["level"]))
{
    $level = clean_text($_POST["level"]);
}
if(!empty($_POST["organization"]))
{
    $organization = clean_text($_POST["organization"]);
}
if(!empty($_POST["type"]))
{
    $type = clean_text($_POST["type"]);
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
if(!empty($_POST["s4"]))
{
    $s4 = clean_text($_POST["s4"]);
}
if(!empty($_POST["topicuseful1"]))
{
    $topicuseful1 = clean_text($_POST["topicuseful1"]);
}
if(!empty($_POST["topicusefulby1"]))
{
    $topicusefulby1 = clean_text($_POST["topicusefulby1"]);
}
if(!empty($_POST["topicnotuseful1"]))
{
    $topicnotuseful1 = clean_text($_POST["topicnotuseful1"]);
}
if(!empty($_POST["topicnotusefulby1"]))
{
    $topicnotusefulby1 = clean_text($_POST["topicnotusefulby1"]);
}

if(!empty($_POST["topicuseful2"]))
{
    $topicuseful2 = clean_text($_POST["topicuseful2"]);
}
if(!empty($_POST["topicusefulby2"]))
{
    $topicusefulby2 = clean_text($_POST["topicusefulby2"]);
}
if(!empty($_POST["topicnotuseful2"]))
{
    $topicnotuseful2 = clean_text($_POST["topicnotuseful2"]);
}
if(!empty($_POST["topicnotusefulby2"]))
{
    $topicnotusefulby2 = clean_text($_POST["topicnotusefulby2"]);
}

if(!empty($_POST["topicuseful3"]))
{
    $topicuseful3 = clean_text($_POST["topicuseful3"]);
}
if(!empty($_POST["topicusefulby3"]))
{
    $topicusefulby3 = clean_text($_POST["topicusefulby3"]);
}
if(!empty($_POST["topicnotuseful3"]))
{
    $topicnotuseful3 = clean_text($_POST["topicnotuseful3"]);
}
if(!empty($_POST["topicnotusefulby3"]))
{
    $topicnotusefulby3 = clean_text($_POST["topicnotusefulby3"]);
}

if(!empty($_POST["topicuseful4"]))
{
    $topicuseful4 = clean_text($_POST["topicuseful4"]);
}
if(!empty($_POST["topicusefulby4"]))
{
    $topicusefulby4 = clean_text($_POST["topicusefulby4"]);
}
if(!empty($_POST["topicnotuseful4"]))
{
    $topicnotuseful4 = clean_text($_POST["topicnotuseful4"]);
}
if(!empty($_POST["topicnotusefulby1"]))
{
    $topicnotusefulby4 = clean_text($_POST["topicnotusefulby4"]);
}

if(!empty($_POST["faculty1"]))
{
    $faculty1 = clean_text($_POST["faculty1"]);
}
if(!empty($_POST["faculty2"]))
{
    $faculty2 = clean_text($_POST["faculty2"]);
}
if(!empty($_POST["faculty3"]))
{
    $faculty3 = clean_text($_POST["faculty3"]);
}
if(!empty($_POST["faculty4"]))
{
    $faculty4 = clean_text($_POST["faculty4"]);
}
if(!empty($_POST["facultyrating1"]))
{
    $facultyrating1 = clean_text($_POST["facultyrating1"]);
}
if(!empty($_POST["facultyrating2"]))
{
    $facultyrating2 = clean_text($_POST["facultyrating2"]);
}
if(!empty($_POST["facultyrating3"]))
{
    $facultyrating3 = clean_text($_POST["facultyrating3"]);
}
if(!empty($_POST["facultyrating4"]))
{
    $facultyrating4 = clean_text($_POST["facultyrating4"]);
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
if(!empty($_POST["extra"]))
{
    $extra = clean_text($_POST["extra"]);
}
$pn = substr($progname,0,strlen($progname));
$stringfile = 'FeedbackForms/'.$name.'('.$progname.')'.'.pdf';
include 'Excel/excel.php';
include 'formtopdf.php';
//include 'generateReport.php';
header('Location: confirmation.php?name='.urlencode($stringfile));
?>