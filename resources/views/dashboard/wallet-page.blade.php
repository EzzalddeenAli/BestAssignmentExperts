@include('dashboard-layout.dashboard-header')

@include('dashboard-layout.dashboard-left-sidebar',[$referral='5'])

    {!! Html::style('dashboard_theme/dist/css/custom.css') !!}

<style>
.box-tab .tab-content .img2 {
    overflow: hidden;
    background-image: url('../dashboard_theme/dist/img/refer-earn.png');
   
}
.item1{
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: transparent !important;
    border: 1px solid #ddd;
}

.box-tab .tab-content .img1 {
    overflow: hidden;
  background-image: url('../dashboard_theme/dist/img/wallet2.png'); 
}
</style>
    
<div class="content-wrapper" style="background: url(dashboard_theme/dist/img/wallet3.jpg) no-repeat center center fixed; background-size:cover; max-height: 500px ">

     
  @if(Session::has('paypal_wallet_success'))
  <div style="padding: 12.5px; font-size: x-large; " class="fade_show alert-success" id="update-wallet"><span>{{session()->get('paypal_wallet_success')}}</span></div>
  @endif
  @if(Session::has('paypal_wallet_fail'))
  <div style="padding: 12.5px; font-size: x-large; " class="fade_show alert-danger" id="update-wallet"><span>{{session()->get('paypal_wallet_fail')}}</span></div>
  @endif

    <section class="content">


<div class="col-md-10 col-md-offset-1">
         
         <div class="box-tab justified profile wizard-profile">
                     
                     <div class="panel-heading headerbar">
                       <h3 class="text-center" style="    font-size: 19px;"><ul class="nav nav-tabs" style="    bottom: 0px;">
                           <li class="active" style="transform: translate3d(0px, 0px, 0px);"><a href="#home4" data-toggle="tab" class="tab_a" aria-expanded="true">Wallet</a> </li>
                           <li style="transform: translate3d(0px, 0px, 0px);" class=""><a href="#profile4" data-toggle="tab" class="tab_a" aria-expanded="false">Refer &amp; Earn</a> </li>
                        
                        </ul></h3>
                    </div>
                        
                        
                        <div class="tab-content" style="padding: 0px;">
                           <div class="tab-pane img1 active" id="home4">
                 <div class="col-sm-8 col-sm-offset-2 box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="https://www.bestassignmentexperts.com/public/profile_pics/graduate.png" alt="User profile picture" width="115" height="115">
              <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

              <ul class="list-group list-group-unbordered box_shadow">
                <li class="list-group-item item1">
                  <b>Total Assignments</b> 
                  <a class="pull-right badge bg-blue">{{$no_of_assignment}}</a>
                </li>
                <li class="list-group-item item1">
                  <b>Referrals</b> <a class="pull-right badge bg-aqua">{{$global_referral}}</a>
                </li>
                <li class="list-group-item item1">
                  <b>Solutions</b> <a class="pull-right badge bg-red">{{$available_solutions}}</a>
                </li>
                 <li class="list-group-item item1">
                <div class="small-box bg-aqua" style="background-color: rgba(0, 153, 204, 0.47);">
        <div class="inner">
            <h3>{!!$wallet_amount!!}</h3>
            <p>USD</p>
        </div>

        <div class="icon">
            <i class="fa fa-money"></i>
            <i class="fa fa-usd"></i>
        </div>


        <a href="#" class="small-box-footer">Amount In Wallet </a>
        </div></li>
        
        <li class="list-group-item item1">
        <div class="small-box bg-yellow" style="background-color: rgba(243, 156, 18, 0.55);">

        <div class="inner" style="padding:25px;"> 
            <h3>Add Money to Wallet</h3>
           
 <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="syedriyazzaidi@gmail.com">
<input type="hidden" name="item_name" value="Best Assignment Expert">
<input type="hidden" name="item_number" value="{{Auth::user()->id}}">
<input type="hidden" name="first_name" value="{{Auth::user()->name}}">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="cancel_return" value="https://www.bestassignmentexperts.com/paypal-wallet-amount-cancel">
<input type="hidden" name="return" value="https://www.bestassignmentexperts.com/paypal-wallet-amount-success">
<div class="input-group margin">
  <input type="number" min="1" max="1000" class="form-control" placeholder="Enter Amount to Add" name="amount">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat" style="width: 110px;">Add</button>
                    </span>
 </div>
</form>         
            
            
            
           
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
    </div></li>
        
              </ul>

            
              
              
              
            </div>
            </div>
                           <div class="tab-pane img2" id="profile4">
                             <div class="col-sm-8 col-sm-offset-2">
            <div>

                <div class="widget-user-header panel-body text-justify" style="height:auto;padding:0px;">

                    <center>
                    
                    <div><h3>Your Unique Referral Code</h3>
                    <h3 class="widget-user-desc refer_ern">{!! $referral_code!!}</h3>
                    </div>

                         <h5 class="refer_mrgin">  <p class="widget-user-username">Share this referral code with your friends. You will get <b>$5</b> and <b>$10</b> will be credited into your friends account. Once he/she complete the order </p>

                    </h5></center>

                </div>

                <div class="widget-user-image" style="top:120px;">

                <img src="/dashboard_theme/dist/img/refer.png" alt="refer" class="img-responsive">

                   

                </div>

                <div class="box-footer" style="background-color: #000;border-top: 1px solid #4cc3d9;">

                    <div class="row">

                        <div class="col-sm-4 border-right">

                            <div class="description-block">

                                <h5 class="description-header"><b class="refer_b">{{$global_referral}}</b></h5>

                                <span class="description-text">Referrals</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                        <div class="col-sm-4 border-right">

                            <div class="description-block">

                                <h5 class="description-header"><b class="refer_b">{{$no_of_assignment}}</b></h5>

                                <span class="description-text">Assignments</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                        <div class="col-sm-4">

                            <div class="description-block">

                                <h5 class="description-header"><b class="refer_b">{!!$wallet_amount!!}</b></h5>

                                <span class="description-text">Wallet</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                    </div>

                    <!-- /.row -->

                </div>
                
                

            </div>
          </div>
          </div>
                    
                        </div>
                     </div>
         
         
        </div>



</section>

</div>
 {!! Html::script('dashboard_theme/dist/js/jquery.min.js') !!}

<script>
 'use strict';
class Popover {
  constructor(element, trigger, options) {
    this.options = { // defaults
      position: Popover.BOTTOM
    };
    this.element = element;
    this.trigger = trigger;
    this._isOpen = false;
    Object.assign(this.options, options);
    this.events();
    this.initialPosition();
  }

  events() {
    this.trigger.addEventListener('click', this.toggle.bind(this));
  }

  initialPosition() {
    let triggerRect = this.trigger.getBoundingClientRect();
    this.element.style.top = ~~triggerRect.top + 'px';
    this.element.style.left = ~~triggerRect.left + 'px';
  }

  toggle(e) {
    e.stopPropagation();
    if (this._isOpen) {
      this.close(e);
    } else {
      this.element.style.display = 'block';
      this._isOpen = true;
      this.outsideClick();
      this.position();
    }
  }

  targetIsInsideElement(e) {
    let target = e.target;
    if (target) {
      do {
        if (target === this.element) {
          return true;
        }
      } while (target = target.parentNode);
    }
    return false;
  }

  close(e) {
    if (!this.targetIsInsideElement(e)) {
      this.element.style.display = 'none';
      this._isOpen = false;
      this.killOutSideClick();
    }
  }

  position(overridePosition) {
    let triggerRect = this.trigger.getBoundingClientRect(),
      elementRect = this.element.getBoundingClientRect(),
      position = overridePosition || this.options.position;
    this.element.classList.remove(Popover.TOP, Popover.BOTTOM, Popover.LEFT, Popover.RIGHT); // remove all possible values
    this.element.classList.add(position);
    if (position.indexOf(Popover.BOTTOM) !== -1) {
      this.element.style.left = ~~triggerRect.left + ~~((triggerRect.width / 2) - ~~(elementRect.width / 2)) + 'px';
      this.element.style.top = ~~triggerRect.bottom + 'px';
    } else if (position.indexOf(Popover.TOP) !== -1) {
      this.element.style.left = ~~triggerRect.left + ~~((triggerRect.width / 2) - ~~(elementRect.width / 2)) + 'px';
      this.element.style.top = ~~(triggerRect.top - elementRect.height) + 'px';
    } else if (position.indexOf(Popover.LEFT) !== -1) {
      this.element.style.top = ~~((triggerRect.top + triggerRect.height / 2) - ~~(elementRect.height / 2)) + 'px';
      this.element.style.left = ~~(triggerRect.left - elementRect.width) + 'px';
    } else {
      this.element.style.top = ~~((triggerRect.top + triggerRect.height / 2) - ~~(elementRect.height / 2)) + 'px';
      this.element.style.left = ~~triggerRect.right + 'px';
    }
  }

  outsideClick() {
    document.addEventListener('click', this.close.bind(this));
  }

  killOutSideClick() {
    document.removeEventListener('click', this.close.bind(this));
  }

  isOpen() {
    return this._isOpen;
  }
}

Popover.TOP = 'top';
Popover.RIGHT = 'right';
Popover.BOTTOM = 'bottom';
Popover.LEFT = 'left';

document.addEventListener('DOMContentLoaded', function() {
  let btn = document.querySelector('#popoverOpener button'),
    template = document.querySelector('.popover'),
    pop = new Popover(template, btn, {
      position: Popover.RIGHT
    }),
    links = template.querySelectorAll('.popover-content a');
  for (let i = 0, len = links.length; i < len; ++i) {
    let link = links[i];
    console.log(link);
    link.addEventListener('click', function(e) {
      e.preventDefault();
      pop.position(this.className);
      this.blur();
      return true;
    });
  }
});

</script>

  <script>
   $(document).ready(function()
    {  
    $("#update-wallet").fadeOut(5500);
    });
    </script>

@include('dashboard-layout.dashboard-footer')