<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index(Request $request)
    {
        $query = Division::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $divisions = $query->paginate(10);

        return response()->json([
            'status' => 'success',
            'message' => 'Divisions retrieved successfully',
            'data' => [
                'divisions' => $divisions->items(),
            ],
            'pagination' => $divisions->toArray(),
        ]);
    }
}
