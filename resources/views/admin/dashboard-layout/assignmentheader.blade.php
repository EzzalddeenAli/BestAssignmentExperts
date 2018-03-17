            
 <div class="content-wrapper" style="margin-top: 5%; margin-bottom:5%;  margin-left: 0;opacity: 0.91">
  <section class="assignment_content">
  <div class="row">
  <div class="col-md-12">
  <ul class="assignment_ul">
   <form action ="/fresh-assignment"  method="post"> 

<li><button style="" type="submit" id="tablesearch" class="btn btn-info">Fresh assignments ({{$freshAssignment}})</button> </li>
</form>
   <form action ="/paid"  method="post"> 
<li><button style="" type="submit" id="tablesearch" class="btn btn-info">Paid ({{$paid_assignment}})</button> </li>

</form>
     <form action ="/solution_recived"  method="post"> 
<li><button style="" type="submit" id="tablesearch" class="btn btn-info">Solution Received ({{$solution_assignment}})</button> </li>
</form>
     <form action ="/rework"  method="post"> 
<li><button style="" type="submit" id="tablesearch" class="btn btn-info">  Rework ({{$rework}})</button> </li>

</form>
</li>
     <form action ="/clarification"  method="post"> 
<li><button style="" type="submit" id="tablesearch" class="btn btn-info"> Clarification ({{$clarification}})</button> </li>
</form>
</li>
    <form action ="/expired-assignments"  method="get"> 
<li><button style="" type="submit" id="tablesearch" class="btn btn-info">  Failed ({{$failed}})</button> </li>

</form>
 <form action ="/plagi-assignments"  method="get"> 
<li><button style="" type="submit" id="tablesearch" class="btn btn-info">Plagi ({{$count_plagi_assignments}})</button> </li>
</form>
  
  </ul>
  </div>
  </div>

  </section>
