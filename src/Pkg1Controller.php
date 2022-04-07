<?php

namespace Huda\Pkg1;

use Carbon\Carbon;
use App\Http\Controllers\Controller;

class Pkg1Controller extends Controller
{
    public function index($timezone)
    {
        echo "a";
        // echo Carbon::now($timezone)->toDateTimeString();
    }
}
