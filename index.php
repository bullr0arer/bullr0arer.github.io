<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax Page</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(document).ready(function(e){
	$("input[name='q1']").keyup(function(e){
		$("#data1").html("loading");
		$("#data1").load("names.php", {q1:$(this).val()} );
			}); });
</script>

<script>
$(document).ready(function(e){
	$("#info").on('change', function() {
		$("#data2").html("loading");
		$.getJSON( "info.php", {q1:$(this).val(),q2:$("input[name='q1']").val()}, function( data ) {
			$("#data2").html(data);
			
			});
			});
	});
	</script>
</head>
<body>
Please enter your county:<br>
<input type="text" name="q1">
<div id="data1"> ... </div>

<select id="info" name="info" value=null>                      
	<option value="0">--Find out more--</option>
	<option name="inc" value="inc">Per Capita Income</option>
	<option name="edu1" value="edu1">H.S. diploma %</option>
	<option name="edu2" value="edu2">College degree %</option>
</select>

<br>
<div id="data2"> </div>
<script>
if(isset("#submit")){
	alert("dropdown set");}
</script>
</body>
</html>
