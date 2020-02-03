<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class SugaController extends Controller
{
    public function index($url = 'sugatest')
    {
        $sugadb = DB::table('sugatest')->get();
        return view($url, ['name' => 'ssssuga',
                           'sugadb' => $sugadb,
        ]);
    }
}
