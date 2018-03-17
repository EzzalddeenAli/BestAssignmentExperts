<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Show Assignment By Date</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    var firstdate = $('#firstdatepicker').datepicker({ dateFormat: 'dd-mm-yy' }).val();
    //$( "#firstdatepicker" ).datepicker();
  });
  </script>


    <script>
  $(function() {
    var lastdate = $('#lastdatepicker').datepicker({ dateFormat: 'yy-dd-mm' }).val();
    //$( "#lastdatepicker" ).datepicker();
  });
  </script>
</head>
@if(Session('status'))
<div class = "alert alert-success">
  {{Session('status')}}
</div>
          @endif
<body>
 <form method="post" action="/test2">
<p>Enter Date: <input type="text" id="firstdatepicker" name="firstdate"></p>



<input type="submit" value="Get Data" name="data"/>

</form>


</body>
</html>