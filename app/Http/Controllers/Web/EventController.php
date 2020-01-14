<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Event;
use App\Http\Requests\EditEventRequest;

class EventController extends Controller
{
    public function index(){
        $Events = Event::paginate(10);
        if (!$Events) {
            throw new HttpException(400, "Invalid data");
        }
        return response()->json([
            $Events,
        ], 200);
        
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
