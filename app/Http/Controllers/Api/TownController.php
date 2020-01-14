<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Town;
use App\Http\Requests\EditTownRequest;

class TownController extends Controller
{
    public function index(){
        return Town::paginate();
    }
 
    public function show($id){
        return Town::find($id);
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditTownRequest $request){
        return Town::create($request->all());
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditTownRequest $request, $id){
        try {
            $data = Town::findOrFail($id);
            $data->update($request->all());
            return $data;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request, $id){
        try {
            $data = Town::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function destroy(Request $request, $id){
        try {
            $data = Town::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
