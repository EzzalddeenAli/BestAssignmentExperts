@include('admin.dashboard-layout.header')   

<style>
.delete_btn{
 padding: 9px 65px 10px 26px;
float: right;
margin-bottom: 5px;
}
</style>


<div class="container dash_margin" style="margin-top:5%; margin-bottom:5%;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px;">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>All Expired Assignments</strong></h4>
 
   @if(Session::has('assign-expert'))
  <div class="fade_show" id="confirm"><span>{{session()->get('assign-expert')}}</span></div>
  @endif
  
  <div style="overflow-x:auto;width: 100%;">
		<table class="display" id="dt1" style="width: 100%; border-collapse: separate; border-spacing: 1px;">
   
  
        <thead>
          <tr>
             
            <th>ASSIGNMENT ID</th>
            <th>ORDER ID</th>
            <th>SUBJECT</th>
            <th>TOTAL AMOUNT</th>
            <th>PAYMENT(PAID,LEFT)</th>
            <th>DUE DATE</th>
            <th>DESCRIPTION</th>
            <th>REFERENCE STYLE</th>
            <th>MANUALLY ASSIGN EXPERT</th>
<!--              <th colspan="2">Action</th>
 -->      <th><input type='checkbox' name='checkall' onclick='checkedAll(deleteChkboxId);'></th>
     </tr>
        </thead>
        <tbody>
            @if($all_expired_assignment)
          
            @foreach($all_expired_assignment as $data)
            <tr class="odd gradeX">
                <td><a href="/show-assignment-details/{{$data['assignment_id']}}"><button type="button" class="btn btn-warning"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data['assignment_id'],$data['uid'])}}</button></button></a></td>
                @if($data['order_id'])
                <td><a href="/order-details/{{$data['order_id']}}"><button type="button" class="btn btn-success">O Id</button><button type="button" class="btn btn-warning">{{$data['order_id']}}</button></a></td>
                @else
                <td><a href="/order-details/{{$data['order_id']}}"><button type="button" class="btn btn-success disabled">O Id</button><button type="button" class="btn btn-warning disabled">{{$data['order_id']}}</button></a></td>
                @endif
            <td>{{$data['subject']}}</td>
            <td>{{$data['total_amount']}}</td>
            <td class="center">{{Auth::User()->currency?Auth::User()->currency:'$'}}{{$data['payment_paid']}}, {{Auth::User()->currency?Auth::User()->currency:'$'}}{{$data['payment_left']}}</td>
            <td class="center">{{$data['due_date']}}</td>
            <td style="height:200px; width=100%; display:block; overflow:auto;">{{$data['description']?$data['description']:'No description is available'}}</td>
            <td>{{$data['reference_style']?$data['reference_style']:'No reference style is chosen by user'}}</td>
            @if($data['assigned_to']=='')
            <td><div data-toggle="modal" data-target="#assignExpertModal" data-id="{{$data['assignment_id']}}"data-request="/expired-assignments" class="btn btn-success manually-asssign-expert">Assign Expert Manually</div></td>
            @else
            <td><a href="/assign-expert/{{$data['assignment_id']}}"><button type="button" class="btn btn-warning disabled" disabled>Expert is assigned</button></a></td>
            @endif  
<!--             <td><a href="/delete-assignment/{{$data['assignment_id']}}" onclick="return confirm('Are you sure you want to delete this Assignment?');"> Delete</a></td>           
 -->         
  <form action="/delete-assignments" method="post" id="deleteChkboxId" enctype="multipart/form-data">
            <td><input type="checkbox" name="deleteChkbox[]" value="{{$data['assignment_id']}}" class="chkbox" id="chkbox"></td>
         </tr>
          @endforeach
          
          @else
          {
           No Records Found Yet
          }
          @endif
          <a href="" onclick="return confirm('Are you sure you want to delete this Assignment?');"><input type="submit" value="Delete" class="delete_btn"></a>
              </form>
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


