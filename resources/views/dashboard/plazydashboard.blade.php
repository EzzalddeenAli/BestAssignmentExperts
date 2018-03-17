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
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
          @foreach($plazy_data as $data)
                <div class="col-md-6">
                    <ul class="timeline">
                        <li class="time-label">
                            <span class="bg-red">
                                User Details:
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-envelope bg-blue">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                        Plazy ID:
                                        <span style="color: orange">
                                <a href="/show-assignment-details/" target="blank"><span class="btn btn-instagram"> {{$data['order_id']}}</span> </a>
                             
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
                                        Subject:
                                    </a>
                                   {{$data['subject']}}
                                </h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-file bg-yellow">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a >
                                    Submiited Quetion File:
                                    </a>
                                     @if($data['original_quetion_filename']!=null)
                                          @foreach($data['original_quetion_filename'] as $upload_file)  
                                          <a href="/fileentry/get2/{{$upload_file['original_quetion_filename']}}" target="blank"><div class="btn btn-warning">{{$upload_file['original_quetion_filename']}}</div></a>
                                          @endforeach
   <form action="/handlequetion" enctype="multipart/form-data" method="post">
                                        <input id="id" name="id" type="hidden" value="{{$data['sid']}}">
                                            <label class="fileLabel" for="fileId">
                                                Upload More File
                                            </label>
                                            <input class="btn btn-warning customFile" id="fileId" name="image" onchange="this.form.submit()" type="file"/>
                                        </input>
                                    </form>

                                      @else
                                  <h6>No File Uploaded Yet</h6>
                                      @endif
                                   
               
                                                Upload More File
                                            </label>
                                            <input class="btn btn-warning customFile" id="fileId" name="image" onchange="this.form.submit()" type="file"/>
                                        </input>
                                    </form>
                                </h3>
                            </div>
                        </li>
                          <li>
                            <i class="fa fa-file bg-yellow">
                            </i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">
                                    <a href="#">
                                    Submiited Solution File:
                                   </a>
                                          @foreach($data['original_solution_filename'] as $upload_file)  
                              <a  href="/fileentry/get3/{{ $upload_file['original_solution_filename']}}" target="blank"> <span class="btn btn-instagram">{{$upload_file['original_solution_filename']}}</span></a>
                                          @endforeach

                                   

                                
                                </h3>
                            </div>
                        </li>
        </section>
     	@endforeach
    </div>
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