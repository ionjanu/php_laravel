<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
function addData(Request $request){
 $add = new Add;
 $add->name = $request->name;
 $add->color = $request->color;
 $add->save();   
 return redirect('/insert'); 
}

function insert() {
    return view ('insert');
}

function readData(){
$select = new Add();
return view ('view', ['select'=>$select->all()]);
}

function readData3(){
    $select = new Add();
    return view ('view', ['select'=>$select->all()->whereIn('color', ['0111', '1011', '1101', '1110','1111'])]);
}

function readData4(){
$select = new Add();

$duplicates = DB::table('adds')->select('name', 'color')->whereIn('color', function ($q){$q->select('color')->from('adds')
    ->groupBy('color')
    ->havingRaw('COUNT(*) > 2');
})->get();


return view ('view', ['select'=>$duplicates]);
}

}