<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        /*$response = Http::get('https://api.first.org/data/v1/countries?region=africa&limit=3&pretty=true');
        print_r($response->body());*/
        //return view('layouts/app');
        return view('website/home');
    }
}