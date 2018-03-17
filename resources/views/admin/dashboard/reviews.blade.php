@include('admin.dashboard-layout.header')   
<div class="container" style="margin-top:5%; margin-bottom:5%; min-height: 450px;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px;">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>All Reviews</strong></h4>
    <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#dt1').dataTable({
        "lengthMenu": [[5, 20, 50, -1], [5, 20, 50, "All"]]
    });
            });
  </script>
  @if($allReviews)
		<table class="display" id="dt1">
        <thead>
	 
          <tr>            
            <th>ID</th>
            <th>SALES RATING</th>
            <th>SUPPORT RATING</th>
            <th>SATISFACTION RATING</th>
            <th>TOTAL RATING</th>
            <th>TITLE</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>DATE</th>
            <th>LOCATION</th>
            <th>REVIEW</th>
           <th colspan="2">Action</th>
           </tr>
	
        </thead>
        <tbody>
            
          
            @foreach($allReviews as $reviews)
            <tr class="odd gradeX">
            <td>{{$reviews->id}}</td>
            <td>{{$reviews->sales_rating}}</td>
            <td>{{$reviews->support_rating}}</td>
            <td>{{$reviews->satisfaction_rating}}</td>
            <td>{{$reviews->total_rating}}</td>
            <td>{{$reviews->review_title}}</td>
            <td>{{$reviews->name}}</td>
            <td>{{$reviews->email}}</td>
            <td>{{date('d/m/Y', strtotime($reviews->date))}}</td>
            <td>{{$reviews->location}}</td>
            <td>{{$reviews->review}}</td>
            <td style="white-space:nowrap;"> 
              @if($reviews->action == 'pending')
              <a href="/publish-review/{{$reviews->id}}"<button class color="">Publish</button></a> |
              <a href="/unpublish-review/{{$reviews->id}}"<button class color="">Unpublish</button></a>
              @elseif($reviews->action == 'publish')
              <a href="/unpublish-review/{{$reviews->id}}"<button class color="">Unpublish</button></a> |
              <a href="/delete-review/{{$reviews->id}}" onclick="return confirm('Are you sure you want to delete this review?');"<button class color="">Delete</button></a>
              @elseif($reviews->action == 'unpublish')
              <a href="/publish-review/{{$reviews->id}}"<button class color="">Publish</button></a> |
              <a href="/delete-review/{{$reviews->id}}" onclick="return confirm('Are you sure you want to delete this review?');"<button class color="">Delete</button></a>
              @else
              Reviews not Found
              @endif
            </td>
            </tr>
            @endforeach
          
        
        </tbody>
      </table><!--/END SECOND TABLE -->
	  @else
          
          <h4>  No Records Found Yet </h4>
          
          @endif
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	

      	
      	<br>
   @include('admin.dashboard-layout.footer')