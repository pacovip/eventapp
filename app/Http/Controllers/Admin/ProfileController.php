<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Profile;
use App\Http\Requests\EditProfileRequest;

class ProfileController extends Controller
{
    public function index(){
        return Profile::paginate();
    }
 
    public function show($id){
        return Profile::find($id);
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditProfileRequest $request){
        return Profile::create($request->all());
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditProfileRequest $request, $id){
        try {
            $data = Profile::findOrFail($id);
            $data->update($request->all());
            return $data;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request, $id){
        try {
            $data = Profile::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function destroy(Request $request, $id){
        try {
            $data = Profile::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
