<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\User;
use App\Event;
use App\Http\Requests\EditUserRequest;

class UserController extends Controller
{
    public function index(){
        return User::with('events')->get();
    }
 
    public function show($id){
        return User::with(['events' => function($query){
            $query->with('type')->with('city')->with('town')->with('district')->get();
        }])->find($id);
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditUserRequest $request){
        return User::create($request->all());
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditUserRequest $request, $id){
        try {
            $data = User::findOrFail($id);
            $data->update($request->all());
            return $data;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request, $id){
        try {
            $data = User::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function destroy(Request $request, $id){
        try {
            $data = User::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
