<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RevValidates;
use App\Models\Product;
use App\Models\Review;
use App\User;


class ProductsController extends Controller
{
    public function index(int $id){
    
        $products = Product::where('pro_id', $id)->get();

        $showreview = DB::table('reviews')
        ->leftJoin('users', function ($join) {

            $join->on('reviews.rev_user_id', '=', 'users.id');

        })->where('reviews.rev_pro_id', '=', $id)->paginate(5);
        

        return view('menu')->with([
            "product" => $products,
            "reviews" => $showreview,
            "ids" => $id,
         ]);
        
    }

    public function createrev(int $id, RevValidates $request){

        $user_id = Auth::id();

        $crerev = new Review();

        $crerev->rev_title = $request->title;
        $crerev->rev_coment = $request->coment;
        $crerev->rev_pro_id = $id;
        $crerev->rev_user_id = $user_id;

        $crerev->save();

        return redirect()->route('product', [
            'id' => $id,
        ]);

    }
}
