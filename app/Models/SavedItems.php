<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedItems extends Model
{

    use HasFactory;

    protected $table='saveditems';
    protected $timestamps = false;

    public function getAllSavedItems(){
        SavedItems::all();
    }
}
