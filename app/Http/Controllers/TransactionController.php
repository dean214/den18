<?php

namespace App\Http\Controllers;
use App\Models\inventory_table;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function getinventory(){
        $easy = DB::select('SELECT* FROM inventory as inv
        INNER JOIN size as s ON s.id = inv.size_id
        INNER JOIN type as t ON t.id = inv.type_id
        INNER JOIN inventory_category as ic ON ic.id = inv.category_id');
        
        return response()->json(["success" => true,"easy" =>$easy],200);
    }

    public function getInventoryData(){
        $moderate=DB::table('inventory as inv')
        ->select('inv.*')
        ->join('size as s','s.id','inv.size_id')
        ->join('type as t','t.id','inv.type_id')
        ->join('inventory_category as ic','ic.id','inv.category_id')
        ->get();

    return response()->json(["success" => true,"moderate" =>$moderate],200);
    }

    public function getinventoryChallenging(){

        $challenging =inventory_table::with('type','inventory_category','size')->get();

        return response()->json(['success' => true, 'challenging' => $challenging],200);


    }
    public function getinventoryDifficult(){

        $difficult = inventory_table::with(['type' => function($q){
            $q->select('*');
        }])->with(['inventory_category' => function($q){
            $q->select('*');
        }])->with(['size' => function($q){
            $q->select('*');
        }])->get();

        return response()->json(['success' => true,'difficult'=> $difficult],200);
    }

    }

