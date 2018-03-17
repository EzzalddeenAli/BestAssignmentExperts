      @include('admin.dashboard-layout.header')
        <div class="container" style="margin-top: 5%; min-height: 450px;">
            <!-- FIRST ROW OF BLOCKS -->
            <div class="row">
                




                <!-- ******************repeat this div -->
                @foreach($expert_profile_data as $expert)
                <div class="col-sm-3 col-lg-3">
                    <a href="/expert-profile/{{$expert->id}}"> 
                    <div class="dash-unit">
                        <dtitle>
                            User Profile
                        </dtitle>
                        <hr>
                            <div class="thumbnail">
                                <img alt="Marcel Newman" class="img-circle" src="../dashboard_theme/dist/img/graduate.png" style="width: 100px">
                                </img>
                            </div>
                            <!-- /thumbnail -->
                            <h1>
                               {{$expert->name}}
                            </h1>
                            <h3>
                                Noida, India
                            </h3>
                            <br>
                               <!--  <div class="info-user">
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
                    </a>
                </div>
                @endforeach
            </div>
            <!--/row -->
        </div>
        <!-- /container -->
        
        <!-- ************************************************88include Footer -->
@include('admin.dashboard-layout.footer')