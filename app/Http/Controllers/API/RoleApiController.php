<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\RoleModel;
use Illuminate\Http\Request;

class RoleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $roles = RoleModel::getRecord();

            // dd($roles->all());
    
            return response()->json([
                'status' => true,
                'message' => 'Data retrieved roles successfully.',
                'result' => $roles
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve data roles.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $save = new RoleModel;
            $save->name = $request->name;
            $save->save();

            return response()->json([
                'status' => true,
                'message' => 'Created role has been successfully.',
                'result' => $save
            ], 200);
        } catch (\Exception $e) {
            // Handle any errors
            return response()->json([
                'status' => false,
                'message' => 'Created role has been failed.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $roles = RoleModel::getSingle($id);
    
            return response()->json([
                'status' => true,
                'message' => 'Get Data retrieved role successfully.',
                'result' => $roles
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve data role.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $save = RoleModel::getSingle($id);
            $save->name = $request->name;
            $save->save();
    
            return response()->json([
                'status' => true,
                'message' => 'Updated role has been successfully.',
                'result' => $save
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to updated role.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $save = RoleModel::getSingle($id);
            $save->delete();

            return response()->json([
                'status' => true,
                'message' => 'Data role has been deleted.',
                'result' => $save
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed delete role data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}