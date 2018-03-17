@include('admin.dashboard-layout.header')
{{Alert::dump()}}
        <div class="container">
            <div class="row" style="margin-top:3%;">
                <div class="col-sm-6 col-lg-6">
                    <div id="hosting-table">
                        <div class="table_style4">
                            <div class="header_row">
                                <h4>
                                    Set Price per Page(INR)
                                </h4>
                            </div>
                            <form name="setPerPageParice" method="POST" action="">
                            <input name="set_price_per_page" type="text" value="200">
                                <button class="btn btn-primary">
                                    Update
                                </button>
                                <!--/ column-->
                            </form>
                        </div>
                        <!--/ Table Style-->
                    </div>
                    <!--/ Hosting Table-->
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div id="hosting-table">
                        <div class="table_style4">
                            <div class="header_row">
                               <h4 style="margin-left:5%;">Check Currency Conversion</h4>
                            </div>
                            <form method="POST" action="">

                            <div class="heading-section">
                            <div class="left-input"><input name="set_price_per_page" type="text" value="200">
                                <select>
                                    <option>INR</option>
                                    <option>GBP</option>
                                    <option>USD</option>
                                    <option>EURO</option>
                                </select>
                                </div>
                                <div class="right-input">
                                <input name="set_price_per_page" type="text" value="200">
                                <select>
                                    <option>INR</option>
                                    <option>GBP</option>
                                    <option>USD</option>
                                    <option>EURO</option>
                                </select>
                                 </div>  
                                <!--/ column-->
                           </div>
                           </form>
                        </div>
                        <!--/ Table Style-->
                    </div>
                    <!--/ Hosting Table-->
                </div>
            </div>
            
            <div class="container" style="margin-top:-20%">
                <h4>
                    <strong>
                        Available Plans
                    </strong>
                </h4>
                <div class="row">
                <form name="priceForm" action="/plan-with-currency" method="POST" style="background: #e6e6e6;">
                    <div class="col-sm-4 col-lg-4">
                        <div id="hosting-table">
                            <div class="table_style4">
                                <div class="column">
                                    <ul>
                                        <li class="header_row">
                                            <h1>
                                                Silver
                                            </h1>
                                        </li>
                                        <li>
                                        <div class="heading-section">
                                            <div class="left">Days</div>
                                            <div class="right">Price</div>
                                        </div>
                                        </li>
                                          @foreach($silver_plans as  $silver)
                                        <li>
                                        <div class="heading-section">
                                            <div class="left-input"><input name="silver_range_{{$silver->id}}" id="{{$silver->id}}" value="{{$silver->day_range}}  " type="text"></div>
                                            <div class="right-input"><input name="silver_price_{{$silver->id}}" id="{{$silver->id}}" value="{{$silver->price}}" type="text"></div>
                                        </div>
                                                  
                                        </li>
                                        @endforeach
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
                            <div class="table_style4">
                                <div class="column">
                                    <ul>
                                        <li class="header_row">
                                            <h1>
                                                Gold
                                            </h1>
                                        </li>
                                        <li>
                                            <div class="heading-section">
                                            <div class="left">Days</div>
                                            <div class="right">Price</div>
                                        </div>
                                        </li>
                                        @foreach($gold_plans as $gold)
                                        <li>
                                        <div class="heading-section">
                                            <div class="left-input"><input name="gold_range_{{$gold->id}}" value = "{{$gold->day_range}}" type="text"></div>
                                             <div class="right-input"><input name="gold_price_{{$gold->id}}" value="{{$gold->price}}" type="text"></div>
                                         </div>       
                                        </li>
                                        @endforeach
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
                            <div class="table_style4">
                                <div class="column">
                                    <ul>
                                        <li class="header_row">
                                            <h1>
                                                Platinum
                                            </h1>
                                        </li>
                                        <li>
                                            <div class="heading-section">
                                            <div class="left">Days</div>
                                            <div class="right">Price</div>
                                        </div>
                                        </li>
                                        @foreach($platinum_plans as $platinum)
                                        <li>
                                        <div class="heading-section">
                                            <div class="left-input"><input name="platinum_range_{{$platinum->id}}" value="{{$platinum->day_range}}"  type="text"></div>
                                             <div class="left-input"><input name="platinum_price_{{$platinum->id}}" value="{{$platinum->price}}"  type="text"></div>
                                          </div>          
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--/ column-->
                            </div>
                            <!--/ Table Style-->
                        </div>
                        <!--/ Hosting Table-->
                    </div>
                    <!-- /span3 -->

                    <button type ="submit" class="btn btn-primary">
                    Update
                    </button>
                </form>
                </div>
                
                <!-- /row -->
            </div>
        
            </br>
        </div>

  @include('admin.dashboard-layout.footer')    