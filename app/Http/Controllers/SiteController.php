<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return "I am from SiteController Home method";
    }

    public function about() {
        return "I am from SiteController About method";
    }

    public function contact() {
        return "I am from SiteController Contact method";
    }
}
