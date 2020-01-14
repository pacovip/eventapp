<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use Illuminate\Http\Response;

use GuzzleHttp\Client;
use CloudCreativity\LaravelJsonApi\Contracts\Client\ClientInterface;
use Illuminate\Support\Facades\Auth;

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
        return view('index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
