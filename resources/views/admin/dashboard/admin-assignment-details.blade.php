@include('admin.dashboard-layout.header')

{!! Html::style('dashboard_theme/dist/css/AdminLTE.css') !!}
{!! Html::style('admin-dashboard/css/custom.css') !!}
  
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>

<style>
.right1{
    font-size: 10px!important; 
}

.left1{
    font-size: 10px!important;
}

.tble_1{
      padding: 20px 0px!important; 
    margin-bottom: 1em!important; 
}

.sticky_btn{
      padding: 12px 35px 12px 35px;
    border: 1px solid #444;
    background-color: #444;
    color: #fff;
}

.sticky_btn:hover{

    border: 1px solid #000;
    background-color: #000;
    color: #fff;
}

.hidden {
  display: none !important;
  visibility: hidden;
}

/* * Hide only visually, but have it available for screenreaders: h5bp.com/v */
.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

/* * Extends the .visuallyhidden class to allow the element to be focusable * when navigated to via the keyboard: h5bp.com/p */

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto;
} /* * Hide visually and from screenreaders, but maintain layout */

.invisible {
  visibility: hidden;
}

.clearfix:before,
.clearfix:after {
  content: " "; /* 1 */
  display: table; /* 2 */
}

.clearfix:after {
  clear: both;
}
.noflick {
  perspective: 1000;
  backface-visibility: hidden;
  transform: translate3d(0,0,0);
}
/* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */
* {
  box-sizing: border-box;
}
html,
button,
input,
select,
textarea {
  color: #000000;
}



::selection {
  background: #B3D4FC;
  text-shadow: none;
}
a:focus {
  outline: none;
}
::-webkit-input-placeholder {
  color: rgba(0,0,0,.7);
}

:placeholder {
  /* Firefox 18- */
  color: rgba(0,0,0,.7);
}

/* ==========================================================================
   Author's custom styles
   ========================================================================== */

#board {
  height: 0px !important;
  padding: 10px;
  margin-top: 40px;
  overflow-y: visible;
  @extend .noflick;
}
.note {
  float: left;
  display: block;
  position: relative;
  padding: 2em;
  width: 250px;
    min-height: 190px;
  margin: 0 30px 30px 0;
  background: linear-gradient(top, rgba(0,0,0,.05), rgba(0,0,0,.25));
  background-color: #FFFD75;
  box-shadow: 5px 5px 10px -2px rgba(33,33,33,.3);
  transform: rotate(2deg);
  transform: skew(-1deg,1deg);
  transition: transform .15s;
  z-index: 1;
  @extend .noflick;

  &:hover {
    cursor: move;
  }
  &.ui-draggable-dragging:nth-child(n) {
    box-shadow: 5px 5px 15px 0 rgba(0,0,0,.3);
    transform: scale(1.125) !important;
    z-index: 100;
    cursor: move;
    transition: transform .150s;
  }

  textarea {
    background-color: transparent;
    border: none;
    resize: vertical;
    font-family: "Gloria Hallelujah", cursive;
    width: 100%;
    padding: 5px;
    &:focus {
      outline: none;
      border: none;
      box-shadow: 0 0 5px 1px rgba(0,0,0,.2) inset;

    
.button 
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
    &.title {
      font-size: 24px;
      line-height: 1.2;
      color: #000000;
      height: 64px;
      margin-top: 20px;
    }

    &.cnt {
      min-height: 200px;
    }
  }
  &:nth-child(2n) {
    background: #FAAACA;
  }
  &:nth-child(3n) {
    background: #69F098;
  }
}

/* Button style  */
.button {
  font: bold 16px Helvetica, Arial, sans-serif;
  color: #FFFFFF;
  padding: 1em 2em;
  background: linear-gradient(top, rgba(0,0,0,.15), rgba(0,0,0,.3));
  background-color: #00CC00;
  border-radius: 3px;
  box-shadow: 1px 1px 3px rgba(0,0,0,.3),inset 0 -1px 2px -1px rgba(0,0,0,.5), inset 0 1px 2px 1px rgba(255,255,255,.3);
  text-shadow: 0 -1px 0 rgba(0,0,0,.3), 0 1px 0 rgba(255,255,255,.3);
  text-decoration: none;
  transition: transform .150s, background .01s;
  @extend .noflick;

  &:hover {
    background-color: #00EE00;
    box-shadow: 
      0 0 0 0 rgba(0,0,0,.3),
      inset 0 -1px 2px -1px rgba(0,0,0,.5), 
      inset 0 1px 2px 1px rgba(255,255,255,.3);
  }

  &:active {
    background: linear-gradient(bottom, rgba(0,0,0,.15), rgba(0,0,0,.3));
    background-color: #00CC00;
    text-shadow: 0 1px 0 rgba(0,0,0,.3), 0 -1px 0 rgba(255,255,255,.3);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.3), inset 0 -1px 2px rgba(255,255,255,.3);
    outline: none;
  }

  &.remove {
    position: absolute;
    top: 5px;
    right: 5px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background-color: #E01C12;
    text-align: center;
    line-height: 16px;
    padding: 10px;
    border-color: #B30000;
    font-style: 1.6em;
    font-weight: bolder;
    font-family: Helvetica, Arial, sans-serif;

    
  }
}

.button.remove {
    position: absolute;
    top: 5px;
    right: 5px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background-color: #E01C12;
    text-align: center;
    line-height: 16px;
    padding: 10px;
    border-color: #B30000;
    font-style: 1.6em;
    font-weight: bolder;
    font-family: Helvetica, Arial, sans-serif;
}

.author {
  position: absolute;
  top: 20px;
  left: 20px;
}

.note textarea.title {
    font-size: 24px;
    line-height: 1.2;
    color: #000000;
    height: 64px;
    margin-top: 20px;
}

.note textarea {
    background-color: transparent;
    border: none;
    resize: vertical;
    font-family: "Gloria Hallelujah", cursive;
    width: 100%;
    padding: 5px;
}

.note textarea:focus {
    outline: none;
    border: none;
    box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
}
</style>
<br><br>
  
                <section class="content">
                    <!-- row -->
                     <div class="row">
                     @if($assignment_details)
                       @foreach($assignment_details as $details)
           
             <div class="col-md-4">
                            <ul class="timeline1">
                               
                              <li>
              <div class="timeline1-item bg-aqua">
                <span class="time1 tlhcolor"><i class="fa fa-book"></i></span>
             <span class="time1 tlhcolor" style="margin-right: 100px;">2740395678</span>  
          <span class="time"><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn_edit" data-toggle="modal" data-target="#meModal" aria-expanded="false">
                          <span><i class="fa fa-edit tlhcolor"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div></span>
                <h3 class="timeline1-header tlhcolor">25-Sep-2017&nbsp&nbsp&nbsp 12:05</h3>
                          
       </div>
            </li>
      
            <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-user"></i></span>
          <span class="time" style="padding: 8px;"><a class="btn btn-success btn-flat btn-xs">Online</a></span>
                <h3 class="timeline1-header">Support team&nbsp&nbsp&nbsp: Team B</h3>
              </div>
            </li> 
      
       <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-user"></i></span>
                <h3 class="timeline1-header"><a class="btn btn-default btn-flat btn-xs btn-xs-timeline">sales(0)</a> <a class="btn btn-default btn-flat btn-xs btn-xs-timeline">support(0)</a> <a class="btn btn-default btn-flat btn-xs btn-xs-timeline">user(1)</a></h3>
              </div>
            </li>
      
      </ul>
                   

               <ul class="timeline1">
                <li>
              <div class="timeline1-item bg-black">
                <span class="time1 tlhcolor"><i class="fa fa-user"></i></span>
           
          <span class="time"><i class="fa fa-star tlhcolor tlicn-pding"></i></span>
                <h3 class="timeline1-header tlhcolor">Job Card</h3>
                          
       </div>
            </li>
      
            <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-book"></i></span>
         
                <h3 class="timeline1-header">AssignmentID:<span style="color: orange">
         {{$details['show_assignment_id']}}</span>
</h3>  
                                                               



            </div>
            </li> 
      
       <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-tags"></i></span>
      
               <h3 class="timeline1-header">Subject: <span style="color: orange">{{$details['subject']}}</h3> </span></div>
            </li>
      
      <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-tags"></i></span>
      
               <h3 class="timeline1-header">Due Date: <span style="color: orange">{{date('M d, Y ',$details['due_date'])}}</h3> </span></div>
            </li>
      
      <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-tags"></i></span>
      
               <h3 class="timeline1-header"> No of Page : <span style="color: orange">{{$details['no_of_pages']}}</h3></span></div>
            </li>
      <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-tags"></i></span>
      
               <h3 class="timeline1-header"> Reference : <span style="color: orange">{{$details['reference_style']}}</h3></span></div>
            </li>
      <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-phone"></i><h4>{{$details['country_code']}} {{$details['contact_number']}}</h4></span>
        
               <h3 class="timeline1-header"><a class="btn btn-success btn-flat btn-xs"> Revised </a></h3> </div>
            </li>
      
      <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-calendar"></i></span>
        @if(($details['expired_date']) <= '0')
<h3 class="timeline1-header">Sep 25, 2017 | Monday 03:34 pm |0 days left <a class="btn btn-success btn-flat btn-xs"> Revised </a></h3> </div>
@else
               <h3 class="timeline1-header">{{date('M d, Y H:I:s',$details['submitted_date'])}} |  {{($details['expired_date'])}} days left <a class="btn btn-success btn-flat btn-xs"> Revised </a></h3> </div>
      @endif
      </li>
      <li>
              <div class="timeline1-item">
                <span class="time1"><i class="fa fa-clock-o"></i></span>
        <span class="time"> Old: 0</span>
               <h3 class="timeline1-header"></h3> </div>
            </li>
      
      </ul>


            <ul class="timeline1">
        
        <li>
         <div class="timeline1-item description-t">
      <span class="time1"><i class="fa fa-navicon"></i></span>
      <span class="time"><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn_edit" data-toggle="modal" data-target="#myModal" aria-expanded="false">
                          <span><i class="fa fa-edit"></i></span>
                        </button>
                       
                      </div></span>
         <h3 class="timeline1-header bg-gray"><a href="#">Description: </a>  </h3>
      <div class="timeline1-body">{{$details['description']}}</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Description</h4>
      </div>
      <div class="modal-body">
       <form  action ="/update-description"  method ="post" enctype="multipart/form-data" >
       <input type="hidden" name="id" value="{{$details['assignment_id']}}">

        <textarea rows="4" cols="50" name="discrip" >{{$details['description']}}</textarea>
         <button type ="submit" class="btn btn-primary" style=" margin-left: 500px;">
                    Update
                    </button>
                  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    </div>
     </li>  
      
      </ul>
      
      
           <ul class="timeline1">
        
        <li>
         <div class="timeline1-item">
      <span class="time1"><i class="fa  fa-cloud-download"></i></span>
      <span class="time tlicn-pding"><i class="fa fa-cloud-upload"></i> Upload Files</span>
         <h3 class="timeline1-header bg-warning1">Files </h3>
          <a href="#">
                                                {{$details['no_of_days']>1?$details['no_of_days'].' days ago':$details['no_of_days'].' day ago'}} 
                                            </a>
       <div class="timeline1-body">
                                     @if($details['uploaded_file']!=null)
                                          @foreach($details['uploaded_file'] as $upload_file)  
                                          <a href="/fileentry/get/{{$upload_file['getfile']}}" target="blank"><div class="btn btn-warning">{{$upload_file['filename']}}</div></a>
                                          @endforeach


                                      @else
                                  <h6>No File Uploaded Yet</h6>
                                      @endif
                                   
          
                   
                   </div>
  
  
  </div>
     </li>  
      
      </ul>
<!--  by bharti ....... -->
<ul class="timeline1">
  <li>
    <div class="timeline1-item">
      <span class="time1">
        <i class="fa  fa-cloud-download">
        </i>
      </span>
      <span class="time tlicn-pding">
        <i class="fa fa-cloud-upload">
        </i> Plagi Uploaded Files
      </span>
      <h3 class="timeline1-header bg-warning1">Plagi Files 
      </h3>
      <a href="#">
        {{$details['no_of_days']>1?$details['no_of_days'].' days ago':$details['no_of_days'].' day ago'}} 
      </a>
      <div class="timeline1-body">
        @if($details['plagi_file']!=null)
        @foreach($details['plagi_file'] as $plagi_upload_file) 
        <a href="/fileentry/get_plagi/{{$plagi_upload_file['plagi_getfile']}}" target="blank">
          <div class="btn btn-warning">{{$plagi_upload_file['plagi_filename']}}
          </div>
        </a>
        @endforeach
        @else
        <h6>No Plagi File Uploaded Yet
        </h6>
        @endif
      </div>
    </div>
  </li>  
</ul>
<!-- ............ -->
           </div>
           
           
           
             <div class="col-md-4">
                           
                   

               <ul class="timeline1">
                <li>
              <div class="timeline1-item timeline_headd">
                <span class="time1 tlhcolor"><i class="fa fa-hourglass-3"></i></span>
                <h3 class="timeline1-header tlhcolor">Status</h3>
       </div>
            </li>
      
            <li>
              <div class="timeline1-item">
          <span class="time"><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn_edit" data-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa fa-edit"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                           <li>
                           <form  action ="/partial"  method ="get" enctype="multipart/form-data" >
                                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}">
                                                   <input type="submit" value="partial" onchange="this.form.submit()" /> 
                                                              </form> 
                                                   </li>
                                                   <li>
                           <form  action ="/clarification"  method ="get" enctype="multipart/form-data" >
                                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}">
                                                   <input type="submit" value="clarification" onchange="this.form.submit()" /> 
                                                              </form> 
                                                   </li>
                                                    <li>
                           <form  action ="/full"  method ="get" enctype="multipart/form-data" >
                                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}">
                                                   <input type="submit" value="full" onchange="this.form.submit()" /> 
                                                              </form> 
                                                   </li>
                                                                             <li>
                           <form  action ="/rework"  method ="get" enctype="multipart/form-data" >
                                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}">
                                                   <input type="submit" value="rework" onchange="this.form.submit()" /> 
                                                              </form> 
                                                   </li>
                                                                             <li>
                           <form  action ="/failed"  method ="get" enctype="multipart/form-data" >
                                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}">
                                                   <input type="submit" value="failed" onchange="this.form.submit()" /> 
                                                              </form> 
                                                   </li>
                        </ul>
                      </div></span>
        
                <h3 class="timeline1-header">Order Status: <span class="label label-primary">{{($details['status'])}}</span></h3>
              </div>
            </li> 
      
      <li>
              <div class="timeline1-item">
          <span class="time"><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn_edit" data-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa fa-edit"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div></span>
        
                <h3 class="timeline1-header">Pay Paid: <span class="label label-danger">${{$details['payment_paid']}}</span></h3>
                <h3 class="timeline1-header">Pay Left: <span class="label label-danger">${{$details['payment_left']}}</span></h3>
                <h3 class="timeline1-header">Order ID: <span class="label label-danger">${{$details['order_id']}}</span></h3>
                <h3 class="timeline1-header">Paid Through: <span class="label label-danger">{{$paythrough}}</span></h3>
                <h3 class="timeline1-header">Transection ID: <span class="label label-danger">{{$transaction}}</span></h3>
              </div>
            </li> 
      <li>
              <div class="timeline1-item">
                <h3 class="timeline1-header">Wallet Amount: <span class="label label-success">{{$wallet}}</span></h3>
              </div>
            </li> 

      <li>
              <div class="timeline1-item">
          <span class="time"><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn_edit" data-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa fa-edit"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div></span>
        
                <h3 class="timeline1-header">Low Quote Reason: None</h3>
              </div>
            </li> 
      
      <li>
              <div class="timeline1-item">
          <span class="time"><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn_edit" data-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa fa-edit"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div></span>
                @if(($details['expired_date']) < '0')
                <h3 class="timeline1-header">Reminder Deadline: 0 days left(1)</h3>
@else
                <h3 class="timeline1-header">Reminder Deadline: {{($details['expired_date'])}} days left( <button id="demo"></buttion>)</h3>


              </div>
              @endif
            </li> 
      
            <li>
              <div class="timeline1-item">
          <span class="time"><div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn_edit" data-toggle="dropdown" aria-expanded="false">
                          <span><i class="fa fa-edit"></i></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Dropdown link</a></li>
                          <li><a href="#">Dropdown link</a></li>
                        </ul>
                      </div></span>
        
                <h3 class="timeline1-header">Order Type: SELECT ORDER TYPE</h3>
              </div>
            </li> 

      <li>
              <div class="timeline1-item">
               <h3 class="timeline1-header"> Budget: <span class="label label-warning"> INR 3000 (30%)</span></h3> </div>
            </li>
      
      <li>
              <div class="timeline1-item">
               <h3 class="timeline1-header"> Category: None</h3> </div>
            </li>
      
      <li>
              <div class="timeline1-item">
               <h3 class="timeline1-header"> View Price Details: <span class="label label-primary">{{($details['total_amount'])}}</span></h3> </div>
            </li>
      <li>
              <div class="timeline1-item">
               <h3 class="timeline1-header"> Offer</h3> </div>
            </li>
      
      <li>
              <div class="timeline1-item">
               <h3 class="timeline1-header"> Order Visibility: <span class="label label-danger"> Disabled</span></h3> </div>
            </li>
      
      </ul>


            <ul class="timeline1">
        
        <li>
         <div class="timeline1-item description-t">
      <span class="time1"><i class="fa fa-money"></i> <a href="#"></a></span>
       <span class="time"><i class="fa fa-star"></i> Revised Quote</span>
         <h3 class="timeline1-header description-h">Price Quote <span> P+</span>
       <span> W+</span>
        <span> Manual Link</span>  </h3>
      <div class="timeline1-body">
             <form name="priceForm" action="/plan-with-currency" method="POST" style="background: #e6e6e6; min-height: 350px;">
                    <div class="col-sm-4 col-lg-4">
                        <div id="hosting-table">
                            <div class="table_style4 tble_1">
                                <div class="column">
                                    <ul>
                                        <li class="header_row">
                                            <h4>
                                                Silver
                                            </h4>
                                        </li>
                                        <li>
                                        <div class="heading-section">
                                            <div class="left left1">Days</div>
                                            <div class="right right1">Price</div>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="heading-section">
                                            <div class="left-input"><input name="silver_range" id="" value=" " type="text"></div>
                                            <div class="right-input"><input name="silver_price" id="" value="" type="text"></div>
                                        </div>
                                                  
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!--/ column-->
                            </div>
                            <!--/ Table Style-->
                        </div>
                        <!--/ Hosting Table-->
                    </div>
                    <!-- /span3 -->
                    <div class="col-sm-4 col-lg-4">
                        <div id="hosting-table">
                            <div class="table_style4 tble_1">
                                <div class="column">
                                    <ul>
                                        <li class="header_row">
                                            <h4>
                                                Gold
                                            </h4>
                                        </li>
                                        <li>
                                            <div class="heading-section">
                                            <div class="left left1">Days</div>
                                            <div class="right right1">Price</div>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="heading-section">
                                            <div class="left-input"><input name="gold_range" value = "" type="text"></div>
                                             <div class="right-input"><input name="gold_price" value="" type="text"></div>
                                         </div>       
                                        </li>
                                    </ul>
                                </div>
                                <!--/ column-->
                            </div>
                            <!--/ Table Style-->
                        </div>
                        <!--/ Hosting Table-->
                    </div>
                    <!-- /span3 -->
                    <div class="col-sm-4 col-lg-4">
                        <div id="hosting-table">
                            <div class="table_style4 tble_1">
                                <div class="column">
                                    <ul>
                                        <li class="header_row">
                                            <h4>
                                                Platinum
                                            </h4>
                                        </li>
                                        <li>
                                            <div class="heading-section">
                                            <div class="left left1">Days</div>
                                            <div class="right right1">Price</div>
                                        </div>
                                        </li>
                                        <li>
                                        <div class="heading-section">
                                            <div class="left-input"><input name="platinum_range" value=""  type="text"></div>
                                             <div class="left-input"><input name="platinum_price" value=""  type="text"></div>
                                          </div>          
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!--/ column-->
                            </div>
                            <!--/ Table Style-->
                        </div>
                        <!--/ Hosting Table-->
                    </div>
                    <!-- /span3 -->

                    <button type ="submit" class="btn btn-primary" style=" margin-left: 25px;">
                    Update
                    </button>
                </form>
  </div></div>
     </li>  
      
      </ul>


           <ul class="timeline1">
        
        <li>
         <div class="timeline1-item description-t">
      <span class="time1"><i class="fa fa-users"></i></span>
     
         <h3 class="timeline1-header description-h"> Experts Assigned</h3>
      <h3 class="timeline1-header description-h">{{$details['your_chosen_expert']?$details['your_chosen_expert']:"Not chosen by your choice"}}</h3>
      <div class="timeline1-body">Your have not paid any amount for this assignment. Kindly make payment in order to get the solutions
  </div></div>
     </li>  
      
      </ul>

           </div>
           
           
             <div class="col-md-4">
           <ul class="timeline1">
        <li>
         <div class="timeline1-item description-t">
      <span class="time1"><i class="fa fa-cloud-upload"></i></span>
     
         <h3 class="timeline1-header description-h"> Upload Solution(s)</h3>




         <form  action ="/show"  method ="post" enctype="multipart/form-data" >
                                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">
                                                      <label class="fileLabel" for="fileId">Upload Solution</label>
                                                   <input type="file"  class="btn btn-warning customFile" name ="image" id="fileId"   onchange="this.form.submit()" /> 
                                                              </form> 
                                               
       <div class="timeline1-body">

                                        @if($details['solution_file']!=null)
                                              Solution is Uploaded by expert are:
                                            
                                           @foreach($details['solution_file'] as $solution_file)  
                                             <a href="/fileentry/get/{{$solution_file['getfile']}}" target="blank"><div class="btn btn-instagram">{{$solution_file['filename']}}</div></a>
                                             
                                           @endforeach
                                        @else

                                          Your Assignment is being processed, please wait,
                                          <strong>we serve our best to provide your solution before deadline</strong>
                                          <strong><h6>We appreciate your patience </h6></strong>
                                        @endif
  </div>
</div>
  <!-- by bharti........... -->
      <div class="timeline1-item description-t">
        <span class="time1">
          <i class="fa fa-cloud-upload">
          </i>
        </span>
        <h3 class="timeline1-header description-h"> Upload Plagi Solution(s)
        </h3>
        <form  action ="/plagi-show"  method ="post" enctype="multipart/form-data" >
          <input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">
          <label class="fileLabel" for="plagiFileId">Upload Plagi Solution
          </label>
          <input type="file"  class="btn btn-warning customFile" name ="image" id="plagiFileId"   onchange="this.form.submit()" /> 
        </form> 
        <div class="timeline1-body">
          @if($details['plagi_solution_file']!=null)
          Plagi Solution is Uploaded by expert are:
          @foreach($details['plagi_solution_file'] as $plagi_solution_file) 
          <a href="/fileentry/get_plagi/{{$plagi_solution_file['plagi_getfile']}}" target="blank">
            <div class="btn btn-instagram">{{$plagi_solution_file['plagi_filename']}}
            </div>
          </a>
          @endforeach
          @else
          Your Assignment is being processed, please wait,
          <strong>we serve our best to provide your plagi solution before deadline
          </strong>
          <strong>
            <h6>We appreciate your patience 
            </h6>
          </strong>
          @endif
        </div>
      </div>
      <!-- ............ -->
     </li>  
      </ul>
</div>
 <div class="col-md-4">
       <ul class="timeline1">
            <li>
          
           <div class="timeline1-item description-t">
      <span class="time1"><i class="fa fa-cloud-upload"></i></span>
     
         <h3 class="timeline1-header description-h"> Update Money</h3>
          <div>
            @if(Session::has('update_money'))
  <div class="fade_show alert alert-success" id="confirm"><span>{{session()->get('update_money')}}</span></div>
  @endif
             <form class="res" action ="/updateMoney">
                <input type="text" name="uid" value="{{$details['assignment_id']}}" placeholder="{{$details['assignment_id']}}" style="width: 100%;height: 45px;color: #000;">
                <input type="hidden" name="country_code" value="{{$details['country_code']}}" id="id">
                <input type="radio"  class="product-list"  name="currency" value="usd" >USD
                <input type="radio" class="product-list"  name="currency"  value="gbp"  >GBP
                <input type="radio" class="product-list"     name="currency"  value="aud" > AUD</br></br>
                <input type="number" name="wallet_amount"  placeholder="Enter Amount to Add" style="width: 50%;height: 40px;" required>
                <button type="submit"  id ="updatemoney" class="btn btn-primary add-wallet-money">update</button>
            </form>   
          </div>
        </div>
      </li>
         </ul>

       <a href="javascript:;" class="button" id="add_new">Add New Note</a>
                                                      
<input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">

    <div id="board">
  
    </div>
      
       
           </div>   
           
               
   <div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="meModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <form action ="/newmodel" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">
              Subject :  <input type="text" name="subject"  >
Reference style<select class="form-control select2" name="ref_style"  id="reqRefStyle" style="width: 100%;">

                                        <option value="No reference">Select</option>

                                        <option value="AGLC">AGLC</option>

                                        <option value="APA">APA</option>

                                        <option value="BMJ">BMJ</option>

                                        <option value="Chicago">Chicago</option>

                                        <option value="Footnotes">Footnotes</option>

                                        <option value="Footnotes and bibliography">Footnotes and bibliography</option>

                                        <option value="Harvard">Harvard</option>

                                        <option value="MHRA">MHRA</option>

                                        <option value="MLA">MLA</option>

                                        <option value="Open">Open</option>

                                        <option value="OSCOLA">OSCOLA</option>

                                        <option value="Turabian">Turabian</option>

                                        <option value="Vancouver">Vancouver</option>

                                    </select>               $no of pages: <input type="text" name="noofpage" >
               Date: <input type="text"  name= "date" id="datepicker">
              <input type="submit" class="btn btn-default"></button>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
            </form>
    </div>
  </div>
  
</div>
             
                        
            
            <div class="col-md-4">
                            
                                         <div class ="cmtError">
                                    <div>
                                    <div class="box box-success" style="height: 420px;">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Chat</h3>
            </div>
            <div class="slimScrollDiv cmtShow" style="position: relative; height: 250px;"><div class="box-body chat" id="chat-box" style="overflow-y: auto; height: 250px;">
              <!-- chat item -->
              @foreach($messageShow as $message) 
               @if($message->sender_id==Auth::user()->id)
               
              <div class="item" style="margin-bottom: 20px;background: azure;padding: 10px; border-radius: 19px;">
                <img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="online">
                <p class="message">
                  <a href="#" class="name">
                   {{Auth::user()->name}}
                  </a>
                 <span style="overflow-wrap: break-word;">{{$message->comment_field}}</span>
                </p>
              </div>
              @else
              <div class="item" style="margin-bottom: 20px;background: antiquewhite;padding: 10px;border-radius: 19px;">                
                <img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="offline ">
                <p class="message">
                  <a href="#" class="name" >
                    {{\App\User::find($message->receiver_id)?\App\User::find($message->receiver_id)->name:'Unknown User'}}
                  </a>
                  <span style="overflow-wrap: break-word;">{{$message->comment_field}}</span>
                </p>
              </div>
                @endif
                @endforeach
              
            
            </div><div class="slimScrollBar"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message..." onkeyup="textCounter(this,'counter',1000);" id="message" style="height: 47px;" >
                <input type="hidden"  maxlength="" size="" value="{{$details['assignment_id']}}" id="getAid">
              
                <input disabled  maxlength="" size="" value="1000" id="counter" style="width: 50px;text-align: center; border: none; margin: 5px;">  Characters Left
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success" id="sendCmtButton" style="padding: 15px; margin-top: -30px;"><i class="fa fa-paper-plane" >Send</i></button>
                </div>

              </div>
            </div>
          </div>
          </div>
          </div>
           @endforeach
                    @endif
                   

                </section>
                <!-- /.content -->
            </div>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<script>
$('#sendCmtButton').click(function() 
{
        console.log('Send message clicked');
        var text = $('#message').val();
        var aid  = $('#getAid').val();
        if(text==null)
          {
            return ;
          }  
       else
       {

  
            

       var data={
        "assignment_id":aid,
        "text_message":text
        };

         $.ajax({
             
             beforeSend: function(xhrObj){
              xhrObj.setRequestHeader("Content-Type","application/json");
              xhrObj.setRequestHeader("Accept","application/json");
             },
             url: "/comment-sent",
             type: "POST",
             data:  JSON.stringify(data),
             contentType: 'application/json; charset=utf-8',
             dataType: 'json',
             
             cache: false,
             success: function (response) 
             {
                console.log(response);
                
                    if(response.success=='true')
                    {   
                    $("#chat-box").addClass("cmtShow").append('<div class="item" style="margin-bottom: 20px;background: azure;padding: 10px;    border-radius: 19px;"><img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="online"><p class="message"><a href="#" class="name">{{Auth::user()->name}}</a><span style="overflow-wrap: break-word;">'+ data.text_message+'</span>  </p></div>');
                    $('#chat-box').scrollTop($('#chat-box').height());

                    }
                   else
                   { 
                   $(".cmtError").addClass("cmtError").append("<div class='info-boxes alert-danger error-log' id='feedback-form-success'><strong>Failed!</strong><br><p>"+response.message+"</p>");
                   }
                   $(".error-log").fadeOut(10000);
              }
          });
      }
    });

function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit);
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}

  
</script>

 
<script>
$(document).ready(function(){
$('#my').fadeOut(5000);
});
</script>
<script>
    (function($)
{
   
    $.fn.autogrow = function(options)
    {
        return this.filter('textarea').each(function()
        {
            var self         = this;
            var $self        = $(self);
            var minHeight    = $self.height();
            var noFlickerPad = $self.hasClass('autogrow-short') ? 0 : parseInt($self.css('lineHeight')) || 0;

            var shadow = $('<div></div>').css({
                position:    'absolute',
                top:         -10000,
                left:        -10000,
                width:       $self.width(),
                fontSize:    $self.css('fontSize'),
                fontFamily:  $self.css('fontFamily'),
                fontWeight:  $self.css('fontWeight'),
                lineHeight:  $self.css('lineHeight'),
                resize:      'none',
                'word-wrap': 'break-word'
            }).appendTo(document.body);

            var update = function(event)
            {
                var times = function(string, number)
                {
                    for (var i=0, r=''; i<number; i++) r += string;
                    return r;
                };

                var val = self.value.replace(/</g, '&lt;')
                                    .replace(/>/g, '&gt;')
                                    .replace(/&/g, '&amp;')
                                    .replace(/\n$/, '<br/>&nbsp;')
                                    .replace(/\n/g, '<br/>')
                                    .replace(/ {2,}/g, function(space){ return times('&nbsp;', space.length - 1) + ' ' });

                // Did enter get pressed?  Resize in this keydown event so that the flicker doesn't occur.
                if (event && event.data && event.data.event === 'keydown' && event.keyCode === 13) {
                    val += '<br />';
                }

                shadow.css('width', $self.width());
                shadow.html(val + (noFlickerPad === 0 ? '...' : '')); // Append '...' to resize pre-emptively.
                $self.height(Math.max(shadow.height() + noFlickerPad, minHeight));
            }

            $self.change(update).keyup(update).keydown({event:'keydown'},update);
            $(window).resize(update);

            update();
        });
    };
})(jQuery);


var noteTemp =  '<div class="note">'
        + '<a href="javascript:;" class="button remove">X</a>'
        +   '<div class="note_cnt">'
        +      ' <form action ="/sticky-note" method="post" >'
        +     '<textarea class="cnt" name="discription" placeholder="{{$discription}}" value="{{$discription}}" ></textarea>'
          +  '<input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">'
        +     '<button class="title" type="submit" id="sticky_btn" placeholder="save"></button>'
        + '</div> '
        +'</div>';
var noteZindex = 1;
function deleteNote(){
    $(this).parent('.note').hide("puff",{ percent: 133}, 250);
};

function newNote() {
  $(noteTemp).hide().appendTo("#board").show("fade", 300).draggable().on('dragstart',
    function(){
       $(this).zIndex(++noteZindex);
    });
 
  $('.remove').click(deleteNote);
  $('textarea').autogrow();
  
  $('.note')
  return false; 
};



$(document).ready(function() {
    
    $("#board").height($(document).height());
    
    $("#add_new").click(newNote);
    
    $('.remove').click(deleteNote);
    newNote();
    
    return false;
});
    </script>
<script>
$(document).ready(function(){
$('#my').fadeOut(5000);
});
</script>
<script>

// Set the date we're counting down to
var countDownDate = new Date("{{date('M d, Y H:I:s',$details['due_date'])}}").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
if(days<=10){
  document.getElementById("demo").style.color = "green";

}
if(days<=5){
    document.getElementById("demo").style.color = "yellow";
}
if(days<=2){
 
    document.getElementById("demo").style.color = "red";
   }
  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
 <script>
  $(document).ready(function()
   {  
   $("#confirm").fadeOut(8500);
   });
   </script> 
<script type="text/javascript">
    $('.product-list').on('change', function() {
        $('.product-list').not(this).prop('checked', false);  
    });
  </script>
    @include('admin.dashboard-layout.footer')