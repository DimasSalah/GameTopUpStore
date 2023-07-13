<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Item;



class AdminHomeController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'client')->count();
        $product = Product::count();
        

        $viewData = [];
        $viewData["title"] = "Admin Page - Admin - Online Store";
        return view('admin.home.index', compact('users','product'))->with("viewData", $viewData);
    }
}
