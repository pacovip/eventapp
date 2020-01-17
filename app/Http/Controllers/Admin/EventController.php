<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Event;
use App\Http\Requests\EditEventRequest;

use GuzzleHttp\Client;
use CloudCreativity\LaravelJsonApi\Contracts\Client\ClientInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class EventController extends Controller
{
    
    private $apiClient;
    protected $api_token;
    
    public function __construct(Request $request) {
        
        $this->apiClient = new Client(['base_uri' => env('API_BASE_URL')]);
        if(!isset($request->user()->api_token)) {
            $this->api_token = '';
        }
    }
    
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
        return view('admin.event.index', compact('events'));
    }
 
    public function show($id){
        if (!$id) {
           throw new HttpException(400, "Invalid id");
        }
        $Event = Event::find($id);
        return response()->json([
            $Event,
        ], 200);
        
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditEventRequest $request){
        if ($request->all()) {
            return Event::create($request->all());
        }
        throw new HttpException(400, "Invalid data");
        
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditEventRequest $request, $id){
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }
        
        $data = Event::find($id);
        
        if ($request->all() && count($data)>0) {
            $data->update($request->all());
            return $data;
        }
        throw new HttpException(400, "Invalid data");        
    }

    
    public function destroy(Request $request, $id){
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }
        
        try {
            $data = Event::find($id);
            $data->delete();
            return response()->json([
                'message' => 'data deleted',
            ], 204);
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
