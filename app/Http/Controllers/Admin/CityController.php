<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\City;
use App\Http\Requests\EditCityRequest;

class CityController extends Controller
{
    public function index(){
        return City::paginate();
    }
 
    public function show($id){
        return City::find($id);
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditCityRequest $request){
        try {
            return City::create($request->all());
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditCityRequest $request, $id){
        try {
            $data = City::findOrFail($id);
            $data->update($request->all());
            return $data;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request, $id){
        try {
            $data = City::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function destroy(Request $request, $id){
        try {
            $data = City::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
