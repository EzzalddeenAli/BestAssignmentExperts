@include('admin.dashboard-layout.header')  
@include('admin.dashboard-layout.assignmentheader')
{!! Html::style('admin-dashboard/css/custom.css') !!}

<style>
.delete_btn
{
  padding: 9px 65px 10px 26px;
  float: right;
  margin-bottom: 5px;
}
</style>

<div class="container" style="margin-top:5%; margin-bottom:5%;">

  <!-- CONTENT -->
  <div class="row" style=" background: #fff; padding: 15px;">
    <div class="col-sm-12 col-lg-12">
      
      <!--SECOND Table -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
          <script>
          $(function() 
          {
            var firstdate = $('#firstdatepicker').datepicker({ dateFormat: 'dd-mm-yy' }).val();
            //$( "#firstdatepicker" ).datepicker();
          });
          </script>

          <h4><strong>Assignment Requests</strong></h4>
          <script type="text/javascript" charset="utf-8">
          $(document).ready(function () 
          {
            $('#dt1').dataTable( 
              { 
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
          </script>
    </div>

    @if(Session::has('assign-expert')) 
    <div class="fade_show alert-success" id="update-request" style="padding: 20px;margin-top: 40px;margin-bottom: 10px;">
      <span>{{session()->get('assign-expert')}}</span>
    </div>
    @endif
 
    <table class="display" id="dt1" style="width: 100%;border-collapse: separate;border-spacing: 1px;">
      <thead>
        <tr>
          <th>ASSIGNMENT ID</th>
          <th>SUBJECT</th>
          <th>TOTAL AMOUNT</th>
          <th>SUBMITTED DATE</th>
            
          <form  action ="/test2"  method ="post" enctype="multipart/form-data" >
            <input type="text" id="firstdatepicker" name="firstdate"  value ="Show Assignment By Submitted Date" onchange="this.form.submit()"/></p>  
          </form>
            
          <th>DUE DATE</th>
          <th>DESCRIPTION</th>
          <th>REFERENCE STYLE</th>
          <th>MANUALLY ASSIGN EXPERT</th>
          <!-- <th colspan="2">Action</th> -->
          <th><input type='checkbox' name='checkall' onclick='checkedAll(deleteChkboxId);'></th>   
        </tr>
      </thead>
      
      <tbody>
        @if($assignment_request_data)
        
          @foreach($assignment_request_data as $data)
          <tr class="odd gradeX">
            <td>
              <a href="/show-assignment-details/{{$data->assignment_id}}">
                <button type="button" class="btn btn-warning">
                  {{$idFormation->getAssignmentAsOrderId($data->assignment_id,$data->uid)}}
                </button>
              </a>
            </td>
            <td>{{$data->subject}}</td>
            <td>{{$data->total_amount}}</td>
            <td class="center">{{$data->submitted_date?date('d-m-y (h:i A)',$data->submitted_date):''}}</td>
            <td class="center">{{$data->due_date?date('d-m-y',$data->due_date):''}}</td>
            <td style="height:200px; width=100%; display:block; overflow:auto;">
              {{$data->description?$data->description:'No further description is available'}}
            </td>
            <td>{{$data->reference_style?$data->reference_style:'Oops, No reference style is chosen by user'}}</td>
            <td>
              <div data-toggle="modal" data-target="#assignExpertModal" data-id="{{$data->assignment_id}}" 
                data-request="/assignment-request" class="btn btn-success manually-asssign-expert">
                Assign Expert Manually
              </div>
            </td>
            <!-- <td>
                    <a href="/delete-assignment/{{$data->assignment_id}}" 
                      onclick="return confirm('Are you sure you want to delete this Assignment?');">
                      Delete
                    </a>
                  </td> -->  

            <form action="/delete-assignments" method="post" id="deleteChkboxId" enctype="multipart/form-data">
              <td>
                <input type="checkbox" name="deleteChkbox[]" value="{{$data->assignment_id}}" class="chkbox" id="chkbox">
              </td>
          </tr>
          @endforeach
        
        @else
        {
          No Records Found Yet
        }
        @endif

              <a href="" onclick="return confirm('Are you sure you want to delete this Assignment?');">
                <input type="submit" value="Delete" class="delete_btn">
              </a>
            </form>
      </tbody>
    </table>    <!--/END SECOND TABLE -->
  <!-- </div>  <!--/span12 -->
  </div> <!-- /row -->
</div> <!-- /container -->

<br>

<!-- MODAL CODE -->
<style type="text/css">
 .show-id 
 {
    border: none !important;
    border-color: transparent !important;
    background: gray !important;
    width: 10% !important;
  }
</style>
<!-- END OF MODAL CODE -->
        
@include('admin.dashboard-layout.footer')

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script>
  $(document).ready(function()
  {  
    $("#update-request").fadeOut(8500);
  });
</script>