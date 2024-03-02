<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function food_beverage() {
        return view('category.food_beverage');
    }

    public function beauty_health() {
        return view('category.beauty_health');
    }

    public function home_care() {
        return view('category.home_care');
    }

    public function baby_kid() {
        return view('category.baby_kid');
    }
}
