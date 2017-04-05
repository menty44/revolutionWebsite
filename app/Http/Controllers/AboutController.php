<?php

/**
 * Created by PhpStorm.
 * User: fred
 * Date: 4/5/17
 * Time: 11:09 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Datatables;
use App\Film;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about.index');
    }


}