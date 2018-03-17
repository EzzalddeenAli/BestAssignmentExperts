@include('admin.dashboard-layout.header') 

<style>
.delete_btn{
 padding: 9px 65px 10px 26px;
float: right;
margin-bottom: 5px;
}
</style>  
<div class="container" style="margin-top:5%; margin-bottom:5%; min-height: 450px;">

      <!-- CONTENT -->
  <div class="row" style="background: #fff; padding: 15px;">
    <div class="col-sm-12 col-lg-12">
      
       <!--SECOND Table -->


    <h4><strong>Student Information</strong></h4>
   
      @if(count($assignment_data))

  <table class="display" id="dt1">
        <thead>
          <tr>
             
            <th>ASSIGNMENT ID</th>
            <th>TOTAL AMMOUNT</th>
            <th>SUBJECT</th>
            <th>DUE DATE</th>
            <th>Submitted DATE</th>
            <th>Expert</th>
            <th>Solution Available</th>
            <th>DESCRIPTION</th>
            <th>Status</th>
            <!-- <th colspan="2">Action</th> -->
 
           <th><input type='checkbox' name='checkall' onclick='checkedAll(deleteChkboxId);'></th>  


            
           
      
            
            
          </tr>
        </thead>
 <tbody>
 @foreach($assignment_data as $data)
<tr class="odd gradeX">
               <td><a href="/show-assignment-details/{{$data->assignment_id}}"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data->assignment_id,$data->uid)}}</button></a></td>
             <td>{{$data->total_amount}}</td>

             <td>{{$data->subject}}</td>
             <td class="center">{{date('d-m-y',$data->due_date)}}</td>
             <td class="center">{{date('d-m-y',$data->submitted_date)}}</td>
              <td>{{$data->expert_name}}</td>
              <td>{{$data->solution_available}}</td>
            <td>{{$data->description?$data->description:'No Description is available'}}</td>
            <td> {{$data->status}}</td>
            <!--                   
    <td><a href="/delete-assignment/{{$data->assignment_id}}" onclick="return confirm('Are you sure you want to delete this Assignment?');"> Delete</a></td> 
 --> 

 <form action="/delete-assignments" method="post" id="deleteChkboxId" enctype="multipart/form-data">
            <td><input type="checkbox" name="deleteChkbox[]" value="{{$data->assignment_id}}" class="chkbox" id="chkbox"></td>
  </tr>
                       @endforeach
  <a href="" onclick="return confirm('Are you sure you want to delete this Assignment?');"><input type="submit" value="Delete" class="delete_btn"></a>
  </form>
                    </tbody>
  

  
   </table> 
@else
      
         <h4>No Records Found Yet</h4>
         
        
@endif

</div>
</div>
</div>

















  @include('admin.dashboard-layout.footer')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" charset="utf-8">
 
            $(document).ready(function () {
                $('#dt1').dataTable({
        "lengthMenu": [[5, 20, 50, -1], [5, 20, 50, "All"]]
    });
            });

      // checbox ..............................

      checked=false;
      function checkedAll (deleteChkboxId) 
      {
        var aa= document.getElementById('deleteChkboxId');
         if (checked == false)
         {
            checked = true
         }
          else
          {
            checked = false
          }

        for (var i =0; i < aa.elements.length; i++)
        {
           aa.elements[i].checked = checked;
        }
      }

// checbox ..............................
  </script>