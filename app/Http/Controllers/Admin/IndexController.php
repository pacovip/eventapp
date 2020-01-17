<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use Illuminate\Http\Response;

use GuzzleHttp\Client;
use CloudCreativity\LaravelJsonApi\Contracts\Client\ClientInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
class IndexController extends Controller
{
    
    private $apiClient;
    protected $api_token;
    
    public function __construct(Request $request) {
        
        $this->apiClient = new Client(['base_uri' => env('API_BASE_URL')]);
        if(!isset($request->user()->api_token)) {
            $this->api_token = '';
        }
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = [];
        try{
            $response = $this->apiClient->request('GET', 'api/event?api_token='.$this->api_token);            
            $events = json_decode($response->getBody(), true);
        }
        catch(\Exception $e) {
            echo $e->getMessage();            
        }
        // view        
        return view('admin.index', compact('events'));
    }

}
