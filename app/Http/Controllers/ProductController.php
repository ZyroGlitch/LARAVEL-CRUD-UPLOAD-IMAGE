<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function product(){
        $userID = Session::get('userID');
        return view('product',compact('userID'));
    }


    public function store(){

        // dd(intval($customerID));
         $store = Product::query()->create([
                 'userID' => intval(request('customerID')),
                 'product' => request('product'),
                 'price' => request('price'),
                 'quantity' => request('quantity'),
                 'subtotal' => request('subtotal'),
                 'img' => request('img'),
             ]);
        
        if($store){
             return redirect()->route('view.product');
        }
    }

    // Fetch Specific Data Records
    public function history(){
        $userID = Session::get('userID');

        // Get the filter from the query parameter
        $filter = request()->query('filter');

        // Start with the base query for the authenticated user
        $query = Product::query()->where('userID', $userID);

        // Apply filtering based on the selected filter value
        if ($filter && $filter !== 'All') {
            $query = Product::query()
            ->where('product', $filter)
            ->where('userID',$userID);
        }

        // Fetch the filtered data
        $fetchData = $query->get();

        // Return the view with the fetched data
        return view('history', compact('fetchData'));
    }

    public function customer(){
        $search = request()->query('search');

        // Apply the default fetch all customer records
        $fetchData = User::all();

        if($search){
            $fetchData = User::query()
            ->where('firstname',$search)->get();
        }
        
        return view('customer', compact('fetchData'));
    }


    public function editForm($productID){
        $data = Product::query()
        ->where('productID',$productID)->first();

        return view('edit',compact('data'));
    }

    public function edit(){
        $data = Product::query()->where('productID', request('productID'))
        ->update([
            'quantity' => request('quantity'),
            'subtotal' => request('quantity') * request('price'),
        ]);
        
        if($data){
            return redirect()->route('view.history');
        }
    }

    // Delete a Specific Order Records
    public function destroy($productID){
        $delete = Product::query()->where('productID',$productID)->delete();

        if($delete){
            return redirect()->route('view.history');
        }
    }
}