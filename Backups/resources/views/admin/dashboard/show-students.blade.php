      @include('admin.dashboard-layout.header')
        <div class="container" style="margin-top: 5%;min-height: 450px;">
            <!-- FIRST ROW OF BLOCKS -->
            <div class="row">
                




                <!-- ******************repeat this div -->
                @foreach($students_profile_data as $student)
                <div class="col-sm-3 col-lg-3">
                   <a href="/student-profile/{{$student->id}}"> 
                    <div class="dash-unit">
                        <dtitle>
                         Student Id: {{$student->id}}
                        </dtitle>
                        <hr>
                            <div class="thumbnail">
                                <img alt="Marcel Newman" class="img-circle" src="{{asset($student->profile_image?$student->profile_image:'public/profile_pics/graduate.png')}}" style="width: 100px">
                                </img>
                            </div>
                            <!-- /thumbnail -->
                            
                            <h1>
                               {{$student->name}}
                            </h1>
                            <h3>
                                {{$student->address}}
                            <br>
                                <!-- <div class="info-user">
                                    <span aria-hidden="true" class="li_user fs1">
                                    </span>
                                    <span aria-hidden="true" class="li_settings fs1">
                                    </span>
                                    <span aria-hidden="true" class="li_mail fs1">
                                    </span>
                                    <span aria-hidden="true" class="li_key fs1">
                                    </span>
                                </div> -->
                            </br>
                        </hr>
                    </div>
                </div>
               </a>
                @endforeach
            </div>
            <!--/row -->
        </div>
        <!-- /container -->
        
        <!-- ************************************************88include Footer -->
@include('admin.dashboard-layout.footer')
