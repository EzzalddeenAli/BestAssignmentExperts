@include('dashboard-layout.dashboard-header')

@include('dashboard-layout.dashboard-left-sidebar')
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700" rel="stylesheet" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <style type="text/css">
        @-webkit-keyframes myanimation {
  from {
    left: 0%;
  }
  to {
    left: 50%;
  }
}
h1 {
  text-align: center;
  font-family: 'PT Sans Caption', sans-serif;
  font-weight: 400;
  font-size: 30px;
  padding: 20px 0;
  color: #777;
}

.checkout-wrap {
  color: #444;
  font-family: 'PT Sans Caption', sans-serif;
  margin: 40px auto;
  max-width: 700px;
  position: relative;
}

ul.checkout-bar {
  margin: 0 20px;
}
ul.checkout-bar li {
  color: #ccc;
  display: block;
  font-size: 16px;
  font-weight: 600;
  padding: 14px 20px 14px 80px;
  position: relative;
}
ul.checkout-bar li:before {
  -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
  box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
  background: #ddd;
  border: 2px solid #FFF;
  border-radius: 50%;
  color: #fff;
  font-size: 16px;
  font-weight: 700;
  left: 20px;
  line-height: 37px;
  height: 35px;
  position: absolute;
  text-align: center;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
  top: 4px;
  width: 35px;
  z-index: 999;
}
ul.checkout-bar li.active {
  color: #8bc53f;
  font-weight: bold;
}
ul.checkout-bar li.active:before {
  background: #8bc53f;
  z-index: 99999;
}
ul.checkout-bar li.visited {
  background: #ECECEC;
  color: #57aed1;
  z-index: 99999;
}
ul.checkout-bar li.visited:before {
  background: #57aed1;
  z-index: 99999;
}
ul.checkout-bar li:nth-child(1):before {
  content: "1";
}
ul.checkout-bar li:nth-child(2):before {
  content: "2";
}
ul.checkout-bar li:nth-child(3):before {
  content: "3";
}
ul.checkout-bar li:nth-child(4):before {
  content: "4";
}
ul.checkout-bar li:nth-child(5):before {
  content: "5";
}
ul.checkout-bar li:nth-child(6):before {
  content: "6";
}
ul.checkout-bar a {
  color: #57aed1;
  font-size: 16px;
  font-weight: 600;
  text-decoration: none;
}

@media all and (min-width: 800px) {
  .checkout-bar li.active:after {
    -webkit-animation: myanimation 3s 0;
    background-size: 35px 35px;
    background-color: #8bc53f;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    content: "";
    height: 15px;
    width: 100%;
    left: 50%;
    position: absolute;
    top: -50px;
    z-index: 0;
  }

  .checkout-wrap {
    margin: 50px auto;
  }

  ul.checkout-bar {
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    background-size: 35px 35px;
    background-color: #EcEcEc;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
    border-radius: 15px;
    height: 15px;
    margin: 0 auto;
    padding: 0;
    position: absolute;
    width: 97%;
  }
  ul.checkout-bar:before {
    background-size: 35px 35px;
    background-color: #57aed1;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    content: " ";
    height: 15px;
    left: 0;
    position: absolute;
    width: 10%;
  }
  ul.checkout-bar li {
    display: inline-block;
    margin: 50px 0 0;
    padding: 0;
    text-align: center;
  }
  ul.checkout-bar li:before {
    height: 45px;
    left: 29%;
    line-height: 45px;
    position: absolute;
    top: -65px;
    width: 45px;
    z-index: 99;
  }
  ul.checkout-bar li.visited {
    background: none;
  }
  ul.checkout-bar li.visited:after {
    background-size: 35px 35px;
    background-color: #57aed1;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    content: "";
    height: 15px;
    left: 50%;
    position: absolute;
    top: -50px;
    width: 100%;
    z-index: 99;
  }
}
    </style>
    >
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                @if($assignment_details)
                       @foreach($assignment_details as $details)
                <div class="col-md-6">
                    <ul class="timeline">
                        <li class="time-label">
                            <span class="bg-red">
                                Assignment Details
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-envelope bg-blue">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        Assignment ID
                                        <span style="color: orange">
                                            {{$details['show_assignment_id']}}
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user bg-aqua">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header no-border">
                                    <a href="#">
                                        Subject
                                    </a>
                                    {{$details['subject']}}
                                </h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-hourglass-start bg-blue">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        Due Date
                                    </a>
                                    {{date("d-m-Y",$details['due_date'])}}
                                </h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-comments bg-yellow">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        Description
                                    </a>
                                </h3>
                                <div class="timeline-body">
                                    {{$details['description']}}
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-street-view bg-gray">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        Expert
                                    </a>
                                    {{$details['your_chosen_expert']?$details['your_chosen_expert'] : "-"}}
                                </h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-file bg-yellow">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        No of Page
                                    </a>
                                    {{$details['no_of_pages']}}
                                </h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-graduation-cap bg-aqua">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header no-border">
                                    <a href="#">
                                        Reference
                                    </a>
                                    {{$details['reference_style']}}
                                </h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-credit-card-alt bg-blue">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        Payment
                                    </a>
                                </h3>
                                @if($details['payment_paid']==0)
                                <div class="timeline-body">
                                    Your have not paid any amount for this assignment. Kindly make payment in order to get the solutions
                                </div>
                                @endif
                                        @if($details['payment_paid']!=0)
                                <div class="timeline-body">
                                    Your have made a payment of ${{$details['payment_paid']}} for this assignment.
                                </div>
                                @endif
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">
                                        Payment Paid: ${{$details['payment_paid']}}
                                    </a>
                                    <br> 
                                        <a class="btn btn-danger btn-xs" style="margin-top:12px;">
                                            Payment Left: ${{$details['payment_left']}}
                                        </a>
                                    </br>
                                </div>
                                @if($details['payment_left']!=0)
                                <div class="timeline-footer">
                                    <a class="btn btn-warning btn-flat btn-xs" href="/payment-order-submission/paynow?_token={{$details['csrf_token']}}&assignment_id={{$details['assignment_id']}}">
                                        Click here to make payment
                                    </a>
                                </div>
                                @endif
                                           @if($details['payment_left']==0)
                                <div class="timeline-footer">
                                    <a class="disabled btn btn-warning btn-flat btn-xs">
                                        Click here to make payment
                                    </a>
                                </div>
                                <div class="image">
                                    <img alt="Best Assignment Experts" src="https://us.123rf.com/450wm/aquir/aquir1612/aquir161204190/67772590-paid-stamp-sign-seal.jpg?ver=6" style="width:100px; margin-top: -75px; float:right"/>
                                </div>
                                @endif
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-clock-o bg-gray">
                            </i>
                        </li>
                    </ul>
                    <div class="box box-success">
                        <h2>
                            Track your Assignment
                        </h2>
                        <div class="box-body checkout-wrap">
                            <ul class="checkout-bar">
                                @if($details['status']=='pending')
                                <li class="active">
                                    Processing
                                </li>

                                @else($details['status']=='processing'&&($details['solution_file']!=null && $details['status']=='completed'&&$details['payment_left']!=0||$details['solution_file']!=null && $details['status']=='completed'&&$details['payment_left']==0))
                                <li class="previous visited">
                                    Processing
                                </li>
                               
                                @endif

                                @if($details['status']=='processing')
                                <li class="active">
                                    Expert Assigned
                                </li>
                                @elseif($details['status']=='processing'||$details['status']=='completed'||($details['solution_file']!=null && $details['status']=='completed'&&$details['payment_left']!=0||$details['payment_left']!=0))
                                <li class="previous visited">
                                    Expert Assigned
                                </li>
                                @else
                                <li class="">
                                    Expert Assigned
                                </li>
                                @endif


                               
                                 @if($details['solution_file']!=null && $details['status']=='completed'&&$details['payment_left']!=0)
                                <li class="active">
                                    Solution Available waiting for payment
                                </li>
                                @elseif($details['payment_left']!=0)
                                <li class="">
                                    Waiting for payment
                                </li>
                                @elseif($details['payment_left']==0&&$details['status']=='completed')
                                <li class="previous visited">
                                   Payment done 
                                </li>
                                @elseif($details['payment_left']==0)
                                <li class="active">
                                   Payment done 
                                </li>

                                @elseif(($details['solution_file']!=null && $details['status']=='completed'&&$details['payment_left']==0)&&($details['solution_file']!=null && $details['status']=='completed'&&$details['payment_left']!=0))
                                <li class="previous visited">
                                      Solution Available waiting for payment
                                </li>
                                @elseif(($details['solution_file']!=null && $details['status']=='completed'&&$details['payment_left']==0)&&($details['payment_left']!=0)||$details['status']=='completed')
                                <li class="previous visited">
                                     Waiting for payment
                                </li>

                                @else
                                <li class="">
                                    Waiting for payment
                                </li>
                                @endif

                               @if($details['solution_file']!=null && $details['status']=='completed'&&$details['payment_left']==0)
                                <li class="active">
                                    Completed
                                </li>
                                @else
                                 <li class="">
                                    Completed
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="timeline">
                        <li class="time-label">
                            <span class="bg-aqua">
                                Uploaded Files
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-cloud-upload bg-purple">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        {{$details['no_of_days']>1?$details['no_of_days'].' days ago':$details['no_of_days'].' day ago'}}
                                    </a>
                                </h3>
                                @if(Session('status'))
                                <div class="alert alert-success" id="my">
                                    {{Session('status')}}
                                </div>
                                @endif
                                <div class="timeline-body">
                                    @if($details['uploaded_file']!=null)
                                          @foreach($details['uploaded_file'] as $upload_file)
                                    <form action="/deleteUpload" enctype="multipart/form-data" method="post">
                                        <input id="id" name="id" type="hidden" value="">
                                            <input id="id" name="assignment_id" type="hidden" value="{{$details['assignment_id']}}">
                                                <button aria-label="Close" class="close" name="image" type="submit" value="Submit">
                                                    <span aria-hidden="true">
                                                        ×
                                                    </span>
                                                </button>
                                                <a href="/fileentry/get/{{$upload_file['getfile']}}" target="blank">
                                                    <div class="btn btn-warning">
                                                        {{$upload_file['filename']}}
                                                    </div>
                                                </a>
                                            </input>
                                        </input>
                                    </form>
                                    @endforeach
                                    <form action="/handleUpload" enctype="multipart/form-data" method="post">
                                        <input id="id" name="id" type="hidden" value="{{$details['assignment_id']}}">
                                            <label class="fileLabel" for="fileId">
                                                Upload File
                                            </label>
                                            <input class="btn btn-warning customFile" id="fileId" name="image" onchange="this.form.submit()" type="file"/>
                                        </input>
                                    </form>
                                    @else
                                    <strong>
                                        You have not uploaded any files yet, please upload your file/s
                                    </strong>
                                    <form action="/handleUpload" enctype="multipart/form-data" method="post">
                                        <input id="id" name="id" type="hidden" value="{{$details['assignment_id']}}">
                                            <label class="fileLabel" for="fileId">
                                                Upload File
                                            </label>
                                            <input class="btn btn-warning customFile" id="fileId" name="image" onchange="this.form.submit()" type="file"/>
                                        </input>
                                    </form>
                                    <!-- 
                                       <form action ="/handleUpload"  method ="post" enctype="multipart/form-data">
                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">

                                          
                                          <input type = "file"   name ="image">
                                     
                                      <button type= "submit" class="btn btn-warning">upload</button>
                                      </form>
                                    -->
                                    @endif
                                </div>
                            </div>
                        </li>

                         <!-- by bharti............. -->
                         <li class="time-label">
                            <span class="bg-aqua">
                                Uploaded Plagi Files
                            </span>
                        </li>
                         <li>
                            <i class="fa fa-cloud-upload bg-purple">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        {{$details['no_of_days']>1?$details['no_of_days'].' days ago':$details['no_of_days'].' day ago'}}
                                    </a>
                                </h3>
                                @if(Session('plagi_status'))
                                <div class="alert alert-success" id="my">
                                    {{Session('plagi_status')}}
                                </div>
                                @endif
                                <div class="timeline-body">
                                    @if($details['uploaded_plagi_file']!=null)
                                      @foreach($details['uploaded_plagi_file'] as $upload_plagi_file)
                                      <form action="/deleteplagiUpload" enctype="multipart/form-data" method="post">
                                          <input id="plagi_id" name="plagi_id" type="hidden" value="{{$upload_plagi_file['file_id']}}">
                                              <input id="plagi_id" name="assignment_id" type="hidden" value="{{$details['assignment_id']}}">
                                                  <button aria-label="Close" class="close" name="image" type="submit" value="Submit">
                                                      <span aria-hidden="true">
                                                          ×
                                                      </span>
                                                  </button>
                                                  <a href="/fileentry/get_plagi/{{$upload_plagi_file['getfile']}}" target="blank">
                                                      <div class="btn btn-warning">
                                                          {{$upload_plagi_file['filename']}}
                                                      </div>
                                                  </a>
                                              </input>
                                          </input>
                                      </form>
                                      @endforeach
                                    <form action="/handleplagiUpload" enctype="multipart/form-data" method="post">
                                        <input id="plagi_id" name="plagi_id" type="hidden" value="{{$details['assignment_id']}}">
                                            <label class="fileLabel" for="plagiFileId">
                                                Upload plagi File
                                            </label>
                                            <input class="btn btn-warning customFile" id="plagiFileId" name="image" onchange="this.form.submit()" type="file"/>
                                        </input>
                                    </form>
                                    @else
                                    <strong>
                                        You have not uploaded any plagi files yet, please upload your plagi file/s
                                    </strong>
                                    <form action="/handleplagiUpload" enctype="multipart/form-data" method="post">
                                        <input id="plagi_id" name="plagi_id" type="hidden" value="{{$details['assignment_id']}}">
                                            <label class="fileLabel" for="plagiFileId">
                                                Upload plagi File
                                            </label>
                                            <input class="btn btn-warning customFile" id="plagiFileId" name="image" onchange="this.form.submit()" type="file"/>
                                        </input>
                                    </form>
                                    <!-- 
                                       <form action ="/handleUpload"  method ="post" enctype="multipart/form-data">
                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">

                                          
                                          <input type = "file"   name ="image">
                                     
                                      <button type= "submit" class="btn btn-warning">upload</button>
                                      </form>
                                    -->
                                    @endif
                                </div>
                            </div>
                        </li>
                        <!-- .......... -->

                        <li class="time-label">
                            <span class="bg-green">
                                Avaliable Solutions
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-cloud-download bg-purple">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        @if($details['solution_file']!=null)
                                                {{$details['no_of_days']>1?$details['no_of_days'].' days ago':$details['no_of_days'].' day ago'}} 
                                                @else
                                                Solution is not available yet
                                                @endif
                                    </a>
                                </h3>
                                <div class="timeline-body">
                                    @if($details['solution_file']!=null && $details['status']=='completed')
                                              @if($details['payment_left']!=0)
                                    <span style="color: orange">
                                        Your Solution is Available, please complete your payment to download the solution file/s.
                                    </span>
                                    @else
                                    <span style="color: green">
                                        Your Solution is Available, You can download now
                                    </span>
                                    <div>
                                        @foreach($details['solution_file'] as $solution_file)
                                        <a href="/fileentry/get1/{{$solution_file['getfile']}}" target="blank">
                                            <div class="btn btn-instagram">
                                                {{$solution_file['filename']}}
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                           @endif
                                        @else
                                        
                                           @if($details['uploaded_file']==null)
                                          Oops! You have not uploaded any assignment file/s yet. Please upload first.
                                    <strong>
                                        we serve our best to provide quality based solution before deadline
                                    </strong>
                                    @else
                                          We have recieved your assignment request. One of our best expert has being assigned for your work shortly. Please check dashboard for further notification.
                                    <br>
                                        <strong>
                                            We appreciate your patience.
                                        </strong>
                                        @endif
                                        @endif
                                    </br>
                                </div>
                            </div>
                        </li>

                        <!-- by bharti.......... -->
                         <li class="time-label">
                            <span class="bg-green">
                                Avaliable plagi Solutions
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-cloud-download bg-purple">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        @if($details['plagi_solution_file']!=null)
                                            {{$details['no_of_days']>1?$details['no_of_days'].' days ago':$details['no_of_days'].' day ago'}} 
                                          @else
                                            plagi Solution is not available yet
                                        @endif
                                    </a>
                                </h3>
                                <div class="timeline-body">
                                    @if($details['plagi_solution_file']!=null && $details['status']=='completed')
                                              @if($details['payment_left']!=0)
                                    <span style="color: orange">
                                        Your plagi Solution is Available, please complete your payment to download the plagi solution file/s.
                                    </span>
                                    @else
                                    <span style="color: green">
                                        Your plagi Solution is Available, You can download now
                                    </span>
                                    <div>
                                        @foreach($details['plagi_solution_file'] as $plagi_solution_file)
                                        <a href="/fileentry/get1/{{$plagi_solution_file['getfile']}}" target="blank">
                                            <div class="btn btn-instagram">
                                                {{$plagi_solution_file['filename']}}
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                           @endif
                                        @else
                                        
                                           @if($details['uploaded_file']==null)
                                          Oops! You have not uploaded any assignment file/s yet. Please upload first.
                                    <strong>
                                        we serve our best to provide quality based solution before deadline
                                    </strong>
                                    @else
                                          We have recieved your assignment request. One of our best expert has being assigned for your work shortly. Please check dashboard for further notification.
                                    <br>
                                        <strong>
                                            We appreciate your patience.
                                        </strong>
                                        @endif
                                        @endif
                                    </br>
                                </div>
                            </div>
                        </li>
                        <!-- .......... -->
                    </ul>
                    <div class="cmtError">
                        <div>
                            <div class="box box-success" style="margin-bottom:100px;">
                                <div class="box-header ui-sortable-handle">
                                    <i class="fa fa-comments-o">
                                    </i>
                                    <h3 class="box-title">
                                        Chat
                                    </h3>
                                </div>
                                <div class="slimScrollDiv cmtShow" style="position: relative; height: 250px;">
                                    <div class="box-body chat" id="chat-box" style="overflow-y: auto; height: 250px;">
                                        @foreach($messageShow as $message)
                                        @if($message->sender_id==Auth::user()->id)
                                        <div class="item" style="margin-bottom: 20px;background: azure;padding: 10px;border-radius: 19px;">
                                            <img alt="user image" class="online" src="../dashboard_theme/dist/img/graduate.png">
                                                <p class="message">
                                                    <a class="name" href="#">
                                                        {{Auth::user()->name}}
                                                    </a>
                                                    <span style="overflow-wrap: break-word;">
                                                        {{$message->comment_field}}
                                                    </span>
                                                </p>
                                            </img>
                                        </div>
                                        @else
                                        <div class="item" style="margin-bottom: 20px;background: antiquewhite;padding: 10px;border-radius: 19px;">
                                            <img alt="user image" class="offline " src="../dashboard_theme/dist/img/graduate.png">
                                                <p class="message">
                                                    <a class="name" href="#">
                                                        Admin
                                                    </a>
                                                    <span style="overflow-wrap: break-word;">
                                                        {{$message->comment_field}}
                                                    </span>
                                                </p>
                                            </img>
                                        </div>
                                        @endif
                              @endforeach
                                    </div>
                                    <div class="slimScrollBar">
                                    </div>
                                    <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                                    </div>
                                </div>
                                <!-- /.chat -->
                                <div class="box-footer">
                                    <div class="input-group">
                                        <input class="form-control" id="message" onkeyup="textCounter(this,'counter',1000);" placeholder="Type message..." style="height: 47px;">
                                            <input id="getAid" maxlength="" size="" type="hidden" value="{{$details['assignment_id']}}">
                                                <input disabled="" id="counter" maxlength="" size="" style="width: 50px;text-align: center; border: none; margin: 5px;" value="1000">
                                                    Characters Left
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-success" id="sendCmtButton" style="padding: 15px; margin-top: -30px;" type="button">
                                                            <i class="fa fa-paper-plane">
                                                                Send
                                                            </i>
                                                        </button>
                                                    </div>
                                                </input>
                                            </input>
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
            </div>
        </section>
      
    </div>
@include('dashboard-layout.dashboard-footer')
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
        console.log(data);

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
                   $("#chat-box").addClass("cmtError").append('<div class="item" style="margin-bottom: 20px;background: Red;padding: 10px;    border-radius: 19px;"><img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="online"><p class="message"><a href="#" class="name">Failure!</a><span style="overflow-wrap: break-word;">'+ response.message+'</span></p></div>');


                    $('#chat-box').scrollTop($('#chat-box').height());
                     $(".cmtError").fadeOut(10000);

                   }
                  
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
/****Auto refresh *****/


 var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 15000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 10000);
         $('#chat-box').scrollTop($('#chat-box').height());
     }

     setTimeout(refresh, 10000);
    </script>
    <script>
        $(document).ready(function(){
$('#my').fadeOut(10000);
});
    </script>
  
  <script>
$('.dropdown-toggle').dropdown();
</script>
</link>