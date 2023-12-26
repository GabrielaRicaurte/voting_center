<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('dashboard', compact('categories'));
    }
}
