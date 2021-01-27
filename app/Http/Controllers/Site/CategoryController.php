<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Pagina incial da categoria dos ingressos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Site.category.index');
    }


    /**
     * Mostra os ingressos
     *
     * @param  $slug
     */
    public function show($slug)
    {
        return view('Site.category.show', ['slug' => $slug]);
    }

}
