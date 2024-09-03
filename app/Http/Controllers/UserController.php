<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {    $query = $request->input('query');

        $users = User::where('name', 'like', '%'.$query.'%')
        ->orWhereHas('department', function ($departmentQuery) use ($query) {
            $departmentQuery->where('name', 'like', '%'.$query.'%');
        })
        ->orWhereHas('designation', function ($designationQuery) use ($query) {
            $designationQuery->where('name', 'like', '%'.$query.'%');
        })
        ->with(['department', 'designation'])
        ->get();

        // return response()->json($users);
        // return response()->json(['users' => $jobs]);
            return view('index', compact('users'));

    }
}
