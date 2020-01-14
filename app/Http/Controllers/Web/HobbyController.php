<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Hobby;
use App\Http\Requests\EditHobbyRequest;

class HobbyController extends Controller
{
    public function index(){
        return Hobby::paginate();
    }
 
    public function show($id){
        return Hobby::find($id);
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditHobbyRequest $request){
        return Hobby::create($request->all());
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditHobbyRequest $request, $id){
        try {
            $data = Hobby::findOrFail($id);
            $data->update($request->all());
            return $data;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request, $id){
        try {
            $data = Hobby::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function destroy(Request $request, $id){
        try {
            $data = Hobby::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
