<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SugaController extends Controller
{
    public function index($url = 'sugatest')
    {
        return view($url, ['name' => 'ssssuga']);
    }
}