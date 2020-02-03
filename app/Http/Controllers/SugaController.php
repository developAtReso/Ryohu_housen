<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class SugaController extends Controller
{
    public function index($url = 'sugatest')
    {
        Mail::to('test@gmail.com')->send(new OrderShipped());
        $sugadb = DB::table('sugatest')->get();
        return view($url, ['name' => 'ssssuga',
                           'sugadb' => $sugadb,
        ]);
    }
}
