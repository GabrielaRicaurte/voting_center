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
        return view('welcome');
    }
}
