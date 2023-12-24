<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chart;
use App\Models\Participant;
use App\Models\Result;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $categories = Category::get();
        $results = Result::get();
        $participants = Participant::get();
        return view('welcome', compact('categories', 'results', 'participants'));
    }
}
