<?php

namespace App\Http\Controllers\Admin;
use App\Models\material;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredientController extends Controller
{
    public function index()
    {
        
        $material = material::where('M_delete',1)->paginate(5);
        return view('admin.ingredient.index', compact('material'));
    }

   /*  public  function join()
    {
        material = DB::table()
    } */
}
