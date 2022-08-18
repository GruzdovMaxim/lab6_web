<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailSub;

class PagesController extends Controller
{
     public function main(){
          return view('pages.main');
     }
   public function about(){
        return view('pages.about');
   }
   public function contact(){
        return view('pages.contact');
   }
   public function gallery(){
        return view('pages.gallery');
   }
   public function news(){
        return view('pages.news');
   }
   public function newsCategories(Request $id){
     /*$cat = NewsCategory::find($id);
     $result = $cat->newsPost;*/
     
     $num_cat = $id->input('category');
     if($num_cat === null)
          $num_cat = 'default'; 
       return view('pages.news', [
         'the_category' => $num_cat,
       ]);
  }
   

}