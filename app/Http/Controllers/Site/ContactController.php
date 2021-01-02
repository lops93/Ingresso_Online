<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Site.contact.index');
    }

     /**
     * lógica do formulario de contato
     *
     * @param $request
     */
    public function form(Request $request)
    {
        ddd($request -> all());
    }
}
