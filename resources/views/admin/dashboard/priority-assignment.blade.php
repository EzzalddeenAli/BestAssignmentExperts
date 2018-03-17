@include('admin.dashboard-layout.header')   
<style>
.delete_btn{
 padding: 9px 65px 10px 26px;
float: right;
margin-bottom: 5px;
}
</style>

<div class="container" style="margin-top:5%; margin-bottom:5%;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px;">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>All Priority Assignments</strong></h4>
   
  <div style="overflow-x:auto;width: 100%;border-collapse: collapse;">
		<table class="display" id="dt1">
        <thead>
          <tr>
             
            <th> ASSIGNMENT ID</th>
            <th>ORDER ID</th>
            <th>SUBJECT</th>
            <th>PAYMENT(Paid, Left)</th>
            <th>DUE DATE</th>
            <th>EXPERT</th>
            <th>DESCRIPTION</th>
            <th>STATUS</th>
<!--             <th colspan="2">Action</th>
 -->         <th><input type='checkbox' name='checkall' onclick='checkedAll(deleteChkboxId);'></th>
  </tr>
        </thead>
        <tbody>
            @if($priority_assignment_data!='')
          
            @foreach($priority_assignment_data as $data)
            <tr class="odd gradeX">
               <td><a href="/show-assignment-details/{{$data->assignment_id}}"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data->assignment_id,$data->uid)}}</button></a></td>
            <td>{{$data->order_id?$data->order_id:"No Order Generated Yet"}}</td>
            <td>{{$data->subject}}</td>
            <td class="center">{{$data->order_id?Auth::User()->currency?Auth::User()->currency:'$':'0'}}{{$data->payment_paid}}, {{$data->order_id?Auth::User()->currency?Auth::User()->currency:'$':'0'}}{{$data->payment_left}}</td>
            <td class="center">{{date('d-m-y',$data->due_date)}}</td>
            <td class="center">{{App\User::find($data->assigned_to)?App\User::find($data->assigned_to)->name:"Expert is not assigned or deleted"}}</td>
            <td>{{$data->description?$data->description:'No description is available'}}</td>
            <td>{{$data->status}}</td>
<!--             <td><a href="/delete-assignment/{{$data->assignment_id}}" onclick="return confirm('Are you sure you want to delete this Assignment?');"> Delete</a></td> 
 -->  
         <form action="/delete-assignments" method="post" id="deleteChkboxId" enctype="multipart/form-data">
            <td><input type="checkbox" name="deleteChkbox[]" value="{{$data->assignment_id}}" class="chkbox" id="chkbox"></td>
         </tr>

          @endforeach
            <a href="" onclick="return confirm('Are you sure you want to delete this Assignment?');"><input type="submit" value="Delete" class="delete_btn"></a>

              </form>
          @else
          {
            No Records Found Yet
          }
        @endif
       
        
        </tbody>
      </table><!--/END SECOND TABLE -->
	
		</div></div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	

      	
      	<br>
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