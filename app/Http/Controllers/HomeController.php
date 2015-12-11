<?php

namespace clinik\Http\Controllers;

use Illuminate\Http\Request;

use clinik\Http\Requests;
use clinik\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Changes the current language and returns to previous page
     * @return Redirect
     */
    public function changeLang($locale = null){

        \LaravelGettext::setLocale($locale);
        return \Redirect::to(\URL::previous());

    }
}
