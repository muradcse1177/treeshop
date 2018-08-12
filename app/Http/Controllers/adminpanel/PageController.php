<?php

namespace App\Http\Controllers\adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function categories()
    {
        return View('adminpanel.categories');
    }
}
