<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SavedItems;

class SavedItemsController extends Controller
{
    public function allSavedItems(){
        return SavedItems::all(); 
    }


    public function saveitem(Request $request){
        $saveditems = new SavedItems();
        $saveditems->name = $request->input('name');
        $saveditems->genre = $request->input('genre');

        $saveditems->save();

    }
}
