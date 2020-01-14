<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\District;
use App\Http\Requests\EditDistrictRequest;

class DistrictController extends Controller
{
    public function index(){
        return District::paginate();
    }
 
    public function show($id){
        return District::find($id);
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditDistrictRequest $request){
        return District::create($request->all());
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditDistrictRequest $request, $id){
        try {
            $data = District::findOrFail($id);
            $data->update($request->all());
            return $data;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request, $id){
        try {
            $data = District::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function destroy(Request $request, $id){
        try {
            $data = District::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
