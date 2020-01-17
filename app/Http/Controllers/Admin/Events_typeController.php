<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Events_type;
use App\Event;
use App\Http\Requests\EditEvents_typeRequest;

class Events_typeController extends Controller
{
    public function index(){
        /*
         * 
        try{
            $client = new Client(['base_uri' => env('API_BASE_URL')]);
            $response = $client->request('GET', '/api/category/list', [
                'headers' => [
                    'Authorization' => 'Bearer '. $request->user()->access_token
                ]
            ]);
            $categories = json_decode($response->getBody(), true);
        }catch(\Exception $e) {
            echo $e->getMessage();
            $categories = [];
        }
         * 
         * return response()->json([
                'data' => $user->toArray(),
            ]);
        */
        //return Events_type::with('events')->get();
        return Events_type::paginate();
    }
 
    public function show($id){
        return Events_type::find($id);
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditEvents_typeRequest $request){
        return Events_type::create($request->all());
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditEvents_typeRequest $request, $id){
        $data = Events_type::findOrFail($id);
        $data->update($request->all());

        return $data;
    }

    public function delete(Request $request, $id){
        $data = Events_type::findOrFail($id);
        $data->delete();
        
        return 204;
    }
    
    public function destroy(Request $request, $id){
        $data = Events_type::findOrFail($id);
        $data->delete();
        
        return 204;
    }
}
