@include('dashboard-layout.dashboard-header')

@include('dashboard-layout.dashboard-left-sidebar')

<div class="content-wrapper" style="background: url(dashboard_theme/dist/img/2.jpg) no-repeat center center fixed; background-size:cover; max-height: 500px ">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>

            

            <br>



        </h1>


    </section>



    <!-- Main content -->

    <section class="content">

        <div class="col-md-12">

            <!-- Widget: user widget style 1 -->

            <div class="box box-widget widget-user">

                <!-- Add the bg color to the header using any of the bg-* classes -->

                <div class="widget-user-header bg-aqua-active" style="height:200px;">

                    <center>

                         <h1>  <strong class="widget-user-username">This is your REFERRAL CODE, Please share this code with your friend to get $5 in your wallet and $10 to your friend's wallet  </strong></h1>

                        <h1 class="widget-user-desc" style="text-shadow :1px 2px 1px magenta">{!! $referral_code!!}</h1>

                        <br>

                    </center>

                </div>

                <div class="widget-user-image" style="top:120px;">



                   

                </div>

                <div class="box-footer">

                    <div class="row">

                        <div class="col-sm-4 border-right">

                            <div class="description-block">

                                <h5 class="description-header">{{$global_referral}}</h5>

                                <span class="description-text">Referrals</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                        <div class="col-sm-4 border-right">

                            <div class="description-block">

                                <h5 class="description-header">{{$global_count_of_assignment}}</h5>

                                <span class="description-text">Assignments</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                        <div class="col-sm-4">

                            <div class="description-block">

                                <h5 class="description-header">{{$global_wallet_amount}}</h5>

                                <span class="description-text">Wallet</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                    </div>

                    <!-- /.row -->

                </div>

            </div>

            <!-- /.widget-user -->

        </div>

        <!-- /.row -->

    </section>

    <!-- /.content -->

</div>



<!-- Control Sidebar -->

@include('dashboard-layout.dashboard-footer')
