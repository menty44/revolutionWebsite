<?php


/**
 * Created by PhpStorm.
 * User: fred
 * Date: 4/5/17
 * Time: 11:08 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Datatables;
use App\Portfolio;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.index');
    }


}