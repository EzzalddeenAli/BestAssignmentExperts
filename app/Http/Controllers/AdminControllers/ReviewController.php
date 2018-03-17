<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use DB;

class ReviewController extends Controller
{ public function showPendingReviews()
    {
    	$reviews = DB::table('reviews')->where('action', 'pending')->orderBy('id', 'desc')->get();
    	return view('admin.dashboard.reviews')->with('allReviews', $reviews);
    } 

    public function showPublishReviews()
    {
        $reviews = DB::table('reviews')->where('action', 'publish')->orderBy('id', 'desc')->get();
        return view('admin.dashboard.reviews')->with('allReviews', $reviews);
    } 

    public function showUnpublishReviews()
    {
        $reviews = DB::table('reviews')->where('action', 'unpublish')->orderBy('id', 'desc')->get();
        return view('admin.dashboard.reviews')->with('allReviews', $reviews);
    } 

    public function DeleteReview($id)
     {
        DB::table('reviews')->where('id',$id)->delete();
         return redirect()->back();
     }   

     public function publishReview($id)
    {
    	DB::table('reviews')->where('id', $id)->update(['action'=>'publish']);
         return redirect()->back();

    }   

     public function unpublishReview($id)
    {
        DB::table('reviews')->where('id', $id)->update(['action'=>'unpublish']);
         return redirect()->back();

    } 
}
