<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;


class ReviewController extends Controller
{
    public function createReview(Request $request)
    {
      $this->validate($request,[
                'title' => 'required',
                'name' => 'required',
                'email' => 'email|unique:users',
                'country_code' => 'required',
                'review' => 'required',
                'g-recaptcha-response' => 'required',   
                /*'g-recaptcha'=>'required|captcha'*/             
          ],[
                Session::flash('review_error','sorry your review are not submit. please fill all the fileds correctly'),

                'title.required' => ' The title field is required.',
               // 'title.min' => ' The title must be at least 3 characters.',
               // 'title.max' => ' The title may not be greater than 50 characters.',
                'name.required' => ' The name field is required.',
                //'name.min' => ' The name must be at least 3 characters.',
                //'name.max' => ' The name may not be greater than 35 characters.',
                'country_code.required' => ' The location field is required.',
                'review.required' => ' The review field is required.',
                //'review.min' => ' The review must be at least 5 characters.',

            ]);

        $totalRating = ($request->salesRating + $request->supportRating + $request->satisfactionRating)/3;

        DB::table('reviews')->insert(['sales_rating'=>$request->salesRating, 'support_rating'=>$request->supportRating, 'satisfaction_rating'=>$request->satisfactionRating, 'total_rating'=>$totalRating, 'review_title'=>$request->title, 'name'=>$request->name, 'email'=>$request->email, 'location'=>$request->country_code, 'review'=>$request->review, 'action'=>'pending']);
        Session::flash('review_approved','Thank you for your review and for choosing Best Assignment Experts. Our Team is Currently reviewing it and we shall published soon.');
        return 'success';
    }

    public function showReview(Request $request)
    {

        $reviews = null;
        
        if(($request->find_rating == '2 Star Rating') || ($request->find_rating == '3 Star Rating') ||
         ($request->find_rating == '4 Star Rating') ||($request->find_rating == '5 Star Rating'))
        {
           $reviews = DB::table('reviews')->where('total_rating', $request->find_rating)->where('action', 'publish')->orderBy('id', 'dsc')->get();
        }
        else
        {
            $reviews = DB::table('reviews')->where('action', 'publish')->orderBy('id', 'desc')->get();
        }

        $fiveStarReviews = DB::table('reviews')->where('action', 'publish')->where('total_rating', 5)->get();
        $fourStarReviews = DB::table('reviews')->where('action', 'publish')->where('total_rating', 4)->get();
        $threeStarReviews = DB::table('reviews')->where('action', 'publish')->where('total_rating', 3)->get();
        $twoStarReviews = DB::table('reviews')->where('action', 'publish')->where('total_rating', 2)->get();

        $totalStars = count($fiveStarReviews) + count($fourStarReviews) + count($threeStarReviews) + count($twoStarReviews);
        
        $totalReviews = 5*count($fiveStarReviews) + 4*count($fourStarReviews) + 3*count($threeStarReviews) + 2*count($twoStarReviews);
        if(($totalReviews) || ($totalStars))
        {
            $averageReview = $totalReviews/$totalStars;    
        }
        else
        {
            $averageReview = 0;   
        }

        return view('main-site-pages.reviews.reviews')->with('data', ['publish_reviews' => $reviews, 'fiveStarReviews' => $fiveStarReviews, 'fourStarReviews' => $fourStarReviews, 'threeStarReviews' => $threeStarReviews, 'twoStarReviews' => $twoStarReviews, 'averageReview' => $averageReview, 'findRating' => $request->find_rating]);
    }

    public function findReview(Request $request)
    {
        $reviews = DB::table('reviews')->where('total_rating', $request->find_rating)->orderBy('id', 'desc')->get();
        return redirect('/view-all-reviews')->with();

    }

   
}
