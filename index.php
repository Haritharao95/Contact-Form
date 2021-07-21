<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Form with AJAX jQuery Bootstrap PHP and MySql</title>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
 <div class="form-group">
 <label for="email">Email:</label>
 <input id="email" class="form-control" type="email" placeholder="Your Email">
 </div>
 <div class="form-group">
 <label for="subject">Subject:</label>
 <input id="subject" class="form-control" type="text" placeholder="Subject">
 </div>
 <div class="form-group">
 <label for="comments">Your Message:</label>
 <textarea id="comments" class="form-control" placeholder="Enter Text Here"></textarea>
 </div>
 <div class="form-group">
 <label for="spam">Spam Control 5+2=?:</label>
 <input id="spam" class="form-control" type="tel" placeholder="Type 7 here.">
 </div>
<button type="submit" id="submit" class="btn btn-default">Contact</button>
<div id="display"></div></pre>
<script>
$(document).ready(function(){
$("#submit").click(function(){
var em = $("#email").val();
var sub = $("#subject").val();
var com = $("#comments").val();
var spm = $("#spam").val();
var dataString = 'em1='+ em + '&sub1='+ sub + '&com1='+ com;
if(em==''||sub==''||com=='')
{
$("#display").html("<div class='alert alert-warning'>Please Fill All Fields.</div>");
}
else if(spm!='7')
{
$("#display").html("<div class='alert alert-danger'>Please Answer The Spam Question.</div>");
}
else
{
$.ajax({
type: "POST",
url: "processor.php",
data: dataString,
cache: false,
success: function(result){
$("#display").html(result);
}
});
}
return false;
});
});
</script>
</div>
</body>
</html>
