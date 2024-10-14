<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCorridaRequest;
use App\Http\Requests\UpdateCorridaRequest;
use App\Models\Corrida;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class CorridasController extends Controller
{

    private function checkRules(Corrida $corrida)
    {
        //Regras
        return false;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCorridaRequest $request)
    {
        $id = Auth::user()->id;
        $corrida = new Corrida();
        $corrida->ini_lat = $request['ini_lat'];
        $corrida->ini_lng = $request['ini_lng'];
        $corrida->end_lat = $request['end_lat'];
        $corrida->end_lng = $request['end_lng'];
        $corrida->usr_id = $id;
        if($this->checkRules($corrida))
        {

            $corrida->save();
            return response()->json([
                'message' => 'OK'
            ], 201);
        } else {
            return response()->json([
                'message' => 'Não há motoristas disponíveis'
            ], 409);
        }
  
    }

    /**
     * Display the specified resource.
     *
    public function show(Corrida $corrida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
    public function edit(Corrida $corrida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
    public function update(UpdateCorridaRequest $request, Corrida $corrida)
    {
        //
    }
    */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $corrida = Corrida::find($id);
        if($corrida)
        {

            $corrida->is_deleted = 1;
            $corrida->save();
            return response()->json([
                'message' => 'OK'
            ], 201);            
        } else {
            return response()->json([
                'message' => 'Corrida Não Encontrada'
            ], 404);            

        }

    }
}