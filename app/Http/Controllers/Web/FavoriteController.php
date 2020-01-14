<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Favorite;
use App\Http\Requests\EditFavoriteRequest;

class FavoriteController extends Controller
{
    public function index(){
        return Favorite::paginate();
    }
 
    public function show($id){
        return Favorite::find($id);
    }
    
    public function create() {
        return false;
    }
    
    public function store(EditFavoriteRequest $request){
        return Favorite::create($request->all());
    }
    
    public function edit() {
        return false;
    }    
    
    public function update(EditFavoriteRequest $request, $id){
        try {
            $data = Favorite::findOrFail($id);
            $data->update($request->all());
            return $data;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(Request $request, $id){
        try {
            $data = Favorite::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function destroy(Request $request, $id){
        try {
            $data = Favorite::findOrFail($id);
            $data->delete();
            return 204;
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}
