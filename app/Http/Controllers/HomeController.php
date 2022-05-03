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
    public function __construct()
    {
        $this->api_url=env('API_URL');
        $this->store_id=env('STORE_ID');
        $response = Http::get($this->api_url.'/retailer/profile/nearby_store_list/'.$this->store_id.'?customer_latitude=17.4010900&customer_longitude=78.5638922');
        $res=json_decode($response->body());
        $res=$res->response;
        if($res->status == '200 OK'){
            $this->branch_id=$res->data->branch[0]->branch_id;
        }else{
            $this->branch_id=1;
        }
        //$client = new \Guzzle\Service\Client($this->api_url);
    }
    public function index()
    {
        /*echo $this->api_url;
        echo env('STORE_ID');die;*/
        //echo $this->api_url.'/api/retailer/profile/nearby_store_list/'.$this->store_id;die;
        //$response = Http::get($this->api_url.'/retailer/profile/nearby_store_list/'.$this->store_id.'?customer_latitude=17.4010900&customer_longitude=78.5638922');
        //$response = Http::get($this->api_url.'profile/nearby_store_list/'.$this->store_id.'?customer_latitude=17.4010900&customer_longitude=78.5638922');
        $response = Http::get($this->api_url.'storefront/rootcategory/list/'.$this->store_id.'/'.$this->branch_id);
        //print_r($response->body());die;
        $res=json_decode($response->body());
        //$res=$res->response;
        //echo "<pre/>";
        //print_r($res);die;
        if($res->status == '200 OK'){
            $categoriesdata=['status'=>1,'data'=>$res->data];
        }else{
            $categoriesdata=['status'=>0,'data'=>[]];
        }
        //return view('layouts/app');
        return view('website/home',compact('categoriesdata'));
    }
}