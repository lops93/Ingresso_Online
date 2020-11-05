<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Site\HomeController;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //versao antiga
    /*public function __invoke(Request $request)
    {
        return view('Site.home.index');
    }*/


    //pagina inicial
    public function index()
    {
        return view('Site.home.index');
    }
}
