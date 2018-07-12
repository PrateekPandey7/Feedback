<?php
  
  $token = $_GET["name"];
  $arr = explode("__", $token,3);
  $code = $arr[0];
  $coord = $arr[1];
  $progname = $arr[2];
  $string = $progname.'__'.$coord;
  $point = 'main.php?name='.urlencode($string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,shrink-to-fit=yes">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="icon" href="npc.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <div class = "mainHeading">
      <img src = "npc.jpg">
      <p class = "heading1"><strong>National Productivity Council</strong><p>
      <p class = "subh1">(Under Department of Industrial Policy & Promotion Ministry of Commerce & Industry, Govt. of India)</p>
      <strong><p class = "heading2">FEEDBACK FORM</p></strong>
      
  </div>

  <form method = "post" action = '<?php echo $point ?>'>
  
    <p>All fields marked with <span style="color:red">  *</span> are compulsory</p>
    <span class = "sp" >Note: We attach a great significance to your evaluation. This would help us to rigorously evaluate the course. Please, therefore, be as candid as you can. Rest assured that your evaluation will be kept strictly confidential. You need not disclose your identity if you wish although it may be more helpful if you do.</span>
    

    <div>
      <hr>
      <strong><center><p class = "longtd1 personal1">PROGRAMME INFORMATION</p></center></strong>
      <hr>
      <div class = "prog">
        <label>Programme Name: <span style="color:red">  *</span></label>
        <?php echo $progname ?>
      </div>  
      <div class = "prog"> 
        <label>Programme Coordinator:</label>
          <?php echo $coord ?>
    </div>
        <hr>
    </div>


    <div>
      <strong><center><p class = "longtd1 personal">PERSONAL INFORMATION</p></center></strong>
      <hr>
      <div class = "prog"><label>Name of the Participant:</label>
        <input name = "name"></input></div>
      <div class = "prog"><label>Designation:</label>
        <input name = "designation" ></input></div>
      <div class = "prog"><label>Name of the Organization: <span style="color:red">  *</span></label>
        <input name = "organization" required></input></div>
      <div class = "prog"><label>Contact No./ Mobile No: </label>
        <input name = "mobile" placeholder = "Mobile"></input></div>
      <div class = "prog"><label>Email: </label>
        <input type = "email" name = "email" placeholder = "Email"></input></div>
    </div>

    <div>
      <table class = "table table-bordered">
        <thead>
          <tr>
            <th class = "longtd1" colspan="6">FEEDBACK</th>
          </tr>
          <th>S.No</th>
          <th>Item</th>
          <th>Rating Please</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td class = "item">To what extent is this programme useful to you in your job or personal growth?<span style="color:red">  *</span></td>
            <td><div class = "bt"><input type="radio" name="s1" value="Very Useful" required>Very Useful</div><div class = "bt"><input type="radio" name="s1" value="Quite Useful"> Quite Useful</div><div class = "bt"><input type="radio" name="s1" value="Of Limited Use"> Of Limited Use</div><div class = "bt"><input type="radio" name="s1" value="Not at all Useful"> Not at all Useful</div></td>
          </tr>
          <tr>
            <td>2</td>
            <td class = "item">How far have you been benefited from interaction with the fellow participants?<span style="color:red">  *</span></td>
            <td><div class = "bt"><input type="radio" name="s2" value="Substantially" required> Substantially</div><div class = "bt"><input type="radio" name="s2" value="Considerably"> Considerably</div><div class = "bt"><input type="radio" name="s2" value="Fairly"> Fairly</div><div class = "bt"><input type="radio" name="s2" value="Not at all"> Not at all</div></td>
          </tr>
          <tr>
            <td>3</td>
            <td class = "item">How was the quality and utility of course material and lecture notes circulated?<span style="color:red">  *</span></td>
            <td><div class = "bt"><input type="radio" name="s3" value="Excellent" required> Excellent</div><div class = "bt"><input type="radio" name="s3" value="Very Good"> Very Good</div><div class = "bt"><input type="radio" name="s3" value="Good"> Good</div><div class = "bt"><input type="radio" name="s3" value="Fair"> Fair</div><div class = "bt"><input type="radio" name="s3" value="Poor"> Poor</div></td>
          </tr>
          <tr>
            <td>4</td>
            <td class = "item">What was the level of learning outcome of this program?<span style="color:red">  *</span></td>
            <td><div class = "bt" data-toggle="tooltip" title="I can generate new ideas or products" ><input type="radio" name="s4" value="Creating"> Creating</div><div class = "bt" data-toggle="tooltip" title="I can justify a decision or a course of action" ><input type="radio" name="s4" value="Evaluating"> Evaluating</div><div class = "bt" data-toggle="tooltip" title="I can break the information into parts to explore patterns and relationships or analyze charts/data to support conclusions"><input type="radio" name="s4" value="Analyzing"> Analyzing</div><div class = "bt"  data-toggle="tooltip" title="I can use information, rules and procedures in concrete situations" ><input type="radio" name="s4" value="Applying"> Applying</div><div class = "bt"  data-toggle="tooltip" title="I can identify/interpret the given terms, concepts and principles" ><input type="radio" name="s4" value="Understanding"> Understanding</div><div class = "bt"  data-toggle="tooltip" title="I am able to recall the information"><input type="radio" name="s4" value="Remembering" required> Remembering</div></td>
          </tr>
          <tr>
            <td>5</td>
            <td class = "item">Type of your Organization?</td>
            <td><select  class = "olevel" name = "type">
                <option disabled selected="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option><option value="Government">Government</option><option value="PSU/Gov">PSU/Govt. Undertaking</option><option value="Private">Private</option></select>
              </td>
          </tr>
          <tr>
            <td>6</td>
            <td class = "item">Your Operational Level?</td>
            <td><select class = "dlevel" name = "level">
                <option disabled selected="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option><option value = "Junior Management">Junior Management</option><option value = "Middle Management">Middle Management</option><option value="Higher Management">Higher Management</option></select>
              </td>
        </tbody>
      </table>
      

      <table class = "table">
        <tr>
          <th class = "longtd" colspan="6">7(i)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evaluate the topics of the Programme</th>
        </tr>
        <tr>
          <td class = "subhead">Topics found most useful</td>
          <td class = "subhead">By (Faculty Name)</td>
          <td class = "subhead"></td>
        </tr>
        <tr class = "topicevaluate">
            <td><input type = "text" name = "topicuseful1"></td>
            <td><input type = "text" name = "topicusefulby1"></td>
            <td><input type = "button" class = "t1" value = "Add Topics" name = "t1">
        </tr>
        <tr class = "topicevaluate tu2">
            <td><input type = "text" name = "topicuseful2"></td>
            <td><input type = "text" name = "topicusefulby2"></td>
            <td><input type = "button" class = "t2" value = "Add Topics" name = "t2">
        </tr>
        <tr class = "topicevaluate tu3">
            <td><input type = "text" name = "topicuseful3"></td>
            <td><input type = "text" name = "topicusefulby3"></td>
            <td><input type = "button" class = "t3" value = "Add Topics" name = "t3">
        </tr>
        <tr class = "topicevaluate tu4">
            <td><input type = "text" name = "topicuseful4"></td>
            <td><input type = "text" name = "topicusefulby4"></td>
            <td></td>
        </tr>
        <tr>
          <td class = "subhead">Topics not found useful</td>
          <td class = "subhead">By (Faculty Name)</td>
          <td class = "subhead"></td>
        </tr>
        <tr class = "topicevaluate">
            <td><input type = "text" name = "topicnotuseful1"></td>
            <td><input type = "text" name = "topicnotusefulby1"></td>
            <td><input type = "button" class = "t4" value = "Add Topics" name = "t4">
        </tr>
        <tr class = "topicevaluate tnu2">
            <td><input type = "text" name = "topicnotuseful2"></td>
            <td><input type = "text" name = "topicnotusefulby2"></td>
            <td><input type = "button" class = "t5" value = "Add Topics" name = "t5">
        </tr>
        <tr class = "topicevaluate tnu3">
            <td><input type = "text" name = "topicnotuseful3"></td>
            <td><input type = "text" name = "topicnotusefulby3"></td>
            <td><input type = "button" class = "t6" value = "Add Topics" name = "t6">
        </tr>
        <tr class = "topicevaluate tnu4">
            <td><input type = "text" name = "topicnotuseful4"></td>
            <td><input type = "text" name = "topicnotusefulby4"></td>
            <td></td>
        </tr>
      </table>
      

      <table class = "evaluate table">
        <tr>
          <th class = "longtd" colspan="5">7(ii)&nbsp;&nbsp;&nbsp;&nbsp;Evaluate the Faculty's/ Speaker's performance (write and tick your evaluation)</th>
        </tr>
        <tr>
          <td class = "subhead">Faculty's Name</td>
          <td class = "subhead">Faculty's Rating</td>
          <td class = "subhead"></td>
        </tr>
        <tr>
          <td class = "f1"><input name = "faculty1" ></td>
          <td><div class = "bt"><input type="radio" name="facultyrating1" value="Excellent" > Excellent</div><div class = "bt"><input type="radio" name="facultyrating1" value="Very Good"> Very Good</div><div class = "bt"><input type="radio" name="facultyrating1" value="Good"> Good</div><div class = "bt"><input type="radio" name="facultyrating1" value="Poor"> Poor</div></td>
          <td><input type = "button" class = "b1" value = "Add Faculty" name = "b1">
        </tr>
        <tr class = "f2">
          <td><input name = "faculty2" ></td>
          <td><div class = "bt"><input type="radio" name="facultyrating2" value="Excellent" > Excellent</div><div class = "bt"><input type="radio" name="facultyrating2" value="Very Good"> Very Good</div><div class = "bt"><input type="radio" name="facultyrating2" value="Good"> Good</div><div class = "bt"><input type="radio" name="facultyrating2" value="Poor"> Poor</div></td>
          <td><input type = "button" class = "b2" value = "Add Faculty" name = "b2">
        </tr>
        <tr class = "f3">
          <td><input name = "faculty3" ></td>
          <td><div class = "bt"><input type="radio" name="facultyrating3" value="Excellent" > Excellent</div><div class = "bt"><input type="radio" name="facultyrating3" value="Very Good"> Very Good</div><div class = "bt"><input type="radio" name="facultyrating3" value="Good"> Good</div><div class = "bt"><input type="radio" name="facultyrating3" value="Poor"> Poor</div></td>
          <td><input type = "button" class = "b3" value = "Add Faculty" name = "b3">
        </tr>
        <tr class = "f4">
          <td><input  name = "faculty4" ></td>
          <td><div class = "bt"><input type="radio" name="facultyrating4" value="Excellent" > Excellent</div><div class = "bt"><input type="radio" name="facultyrating4" value="Very Good"> Very Good</div><div class = "bt"><input type="radio" name="facultyrating4" value="Good"> Good</div><div class = "bt"><input type="radio" name="facultyrating4" value="Poor"> Poor</div></td>
          <td>
        </tr>
      </table>
      

      <table class = "table table-bordered">
        <tr>
          <th class = "longtd" colspan="3">8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To what extent are you satisfied with the quality of the following (only if applicable)</th>
        </tr>
        <tr>
          <td width = "50px">A</td>
          <td class = "item">Whether Accommodation were provided? <div>(If yes, rate it)</div> </td>
          <td width = "417px">
             <div class = "bt"><input type="radio" name="sa" class = "yesa" value="Yes" > Yes</div><div class = "bt"><input type="radio" name="sa" class = "noa" value="No"> No</div>
             <div class = "yesnoa bt"><input type="radio" name="sa" value="Fully" > Fully</div><div class = "yesnoa bt"><input type="radio" name="sa" value="To a large extent"> To a large extent</div><div class = "yesnoa bt"><input type="radio" name="sa" value="To a limited extent"> To a limited extent</div><div class = "yesnoa bt"><input type="radio" name="sa" value="Not at all"> Not at all</div></td>
        </tr>
        <tr>
          <td width = "50px">B</td>
          <td class = "item">Whether Food were provided? <div>(If yes, rate it)</div> </td>
          <td width = "417px"> 
            <div class = "bt"><input type="radio" name="sb" class = "yesb" value="Yes" > Yes</div><div class = "bt"><input type="radio" name="sb" class = "nob" value="No"> No</div>
             <div class = "yesnob bt"><input type="radio" name="sb" value="Fully" > Fully</div><div class = "yesnob bt"><input type="radio" name="sb" value="To a large extent"> To a large extent</div><div class = "yesnob bt"><input type="radio" name="sb" value="To a limited extent"> To a limited extent</div><div class = "yesnob bt"><input type="radio" name="sb" value="Not at all"> Not at all</div></td>
        </tr>
        <tr>
          <td width = "50px">C</td>
          <td class = "item">Whether Room service and other hotel facilities were provided? <div>(If yes, rate it)</div> </td>
          <td width = "417px">
             <div class = "bt"><input type="radio" name="sc" class = "yesc" value="Yes" > Yes</div><div class = "bt"><input type="radio" name="sc" class = "noc" value="No"> No</div>
             <div class = "yesnoc bt"><input type="radio" name="sc" value="Fully" > Fully</div><div class = "yesnoc bt"><input type="radio" name="sc" value="To a large extent"> To a large extent</div><div class = "yesnoc bt"><input type="radio" name="sc" value="To a limited extent"> To a limited extent</div><div class = "yesnoc bt"><input type="radio" name="sc" value="Not at all"> Not at all</div></td>
        </tr>
        <tr>
          <td width = "50px">D</td>
          <td class = "item">Whether Folder and writing material were provided? <div>(If yes, rate it)</div> </td>
          <td width = "417px">
             <div class = "bt"><input type="radio" name="sd" class = "yesd" value="Yes" > Yes</div><div class = "bt"><input type="radio" name="sd" class = "nod" value="No"> No</div>
             <div class = "yesnod bt"><input type="radio" name="sd" value="Fully" > Fully</div><div class = "yesnod bt"><input type="radio" name="sd" value="To a large extent"> To a large extent</div><div class = "yesnod bt"><input type="radio" name="sd" value="To a limited extent"> To a limited extent</div><div class = "yesnod bt"><input type="radio" name="sd" value="Not at all"> Not at all</div></td>
        </tr>
        <tr>
          <td width = "50px">E</td>
          <td class = "item">Whether Administrative arrangement of NPC were provided? <div>(If yes, rate it)</div> </td>
          <td width = "417px">
             <div class = "bt"><input type="radio" name="se" class = "yese" value="Yes" > Yes</div><div class = "bt"><input type="radio" name="se" class = "noe" value="No"> No</div>
             <div class = "yesnoe bt"><input type="radio" name="se" value="Fully" > Fully</div><div class = "yesnoe bt"><input type="radio" name="se" value="To a large extent"> To a large extent</div><div class = "yesnoe bt"><input type="radio" name="se" value="To a limited extent"> To a limited extent</div><div class = "yesnoe bt"><input type="radio" name="se" value="Not at all"> Not at all</div></td>
        </tr>
        <tr>
          <td width = "50px">9</td>
          <td class = "item">Whether Audio-Visual aids were used? <div>(If yes, evaluate its use)</div> </td>
          <td width = "417px">
            <div class = "bt"><input type="radio" name="s6" class = "yes" value="Yes" > Yes</div><div class = "bt"><input type="radio" name="s6" class = "no" value="No"> No</div>
            <div class = " yesno bt"><input type="radio" name="s6" value="Excellent"> Excellent</div><div class = "yesno bt"><input type="radio" name="s6" value="Very Good"> Very Good</div><div class = "yesno bt"><input type="radio" name="s6" value="Good"> Good</div><div class = "yesno bt"><input type="radio" name="s6" value="Adequate"> Adequate</div><div class = "yesno bt"><input type="radio" name="s6" value="Poor"> Poor</div></td>
        </tr>
        <tr>
          <td width = "50px">10</td>
          <td class = "item">Your Overall impression of the course</td>
          <td width = "417px"><div class = "bt"><input type="radio" name="s7" value="Excellent" > Excellent</div><div class = "bt"><input type="radio" name="s7" value="Very Good"> Very Good</div><div class = "bt"><input type="radio" name="s7" value="Good"> Good</div><div class = "bt"><input type="radio" name="s7" value="Fair"> Fair</div><div class = "bt"><input type="radio" name="s7" value="Poor"> Poor</div></td>
        </tr>
      </table>
      
      <table class = "extra table table-bordered">
        <tr>
          <th class = "longtd" colspan="3">11&nbsp;&nbsp;&nbsp;&nbsp;You can add any extra remark or information that you would like to give</th>
        </tr>
        <tr>
          <td colspan = "3"><textarea name = "extra" ></textarea></td>
        </tr>
      </table>
      
      <table class = "remark table table-bordered">
        <tr>
          <td class = "longtd" colspan="3"><strong>12&nbsp;&nbsp;&nbsp;&nbsp;Please indicate the new learning and your take away from the program </strong><div class ="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Your message with your name may be included in NPC Publications)</div></td>
        </tr>
        <tr>
          <td colspan = "3"><textarea name = "remark" ></textarea></td>
        </tr>
      </table>

    </div>

    <center><input type = "submit" name = "submit"></center>

  </form>

</div>

</body>

<script>

  $(document).ready(function()
    {
        $(".yes").click(function()
        {
            $(".yesno").show();
        });
        $(".no").click(function()
        {
            $(".yesno").hide();
        });

        $(".yesa").click(function()
        {
            $(".yesnoa").show();
        });
        $(".noa").click(function()
        {
            $(".yesnoa").hide();
        });

        $(".yesb").click(function()
        {
            $(".yesnob").show();
        });
        $(".nob").click(function()
        {
            $(".yesnob").hide();
        });

        $(".yesc").click(function()
        {
            $(".yesnoc").show();
        });
        $(".noc").click(function()
        {
            $(".yesnoc").hide();
        });

        $(".yesd").click(function()
        {
            $(".yesnod").show();
        });
        $(".nod").click(function()
        {
            $(".yesnod").hide();
        });

        $(".yese").click(function()
        {
            $(".yesnoe").show();
        });
        $(".noe").click(function()
        {
            $(".yesnoe").hide();
        });

        $(".b1").click(function()
        {
            $(".f2").show();
        });
        $(".b2").click(function()
        {
            $(".f3").show();
        });
        $(".b3").click(function()
        {
            $(".f4").show();
        });
        $(".t1").click(function()
        {
                $(".tu2").show();
        });
        $(".t2").click(function()
        {
                $(".tu3").show();
        });
        $(".t3").click(function()
        {
                $(".tu4").show();
        });
      $(".t4").click(function()
        {
                $(".tnu2").show();
        });
        $(".t5").click(function()
        {
                $(".tnu3").show();
        });
        $(".t6").click(function()
        {
                $(".tnu4").show();
        });
    });  

</script>


</html>
