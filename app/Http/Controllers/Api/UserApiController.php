<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function show($id)
    {
        return response()->json(User::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }

        public function destroyByName($name)
    {
        $deleted = User::where('name', $name)->delete();
        if ($deleted) {
            return response()->json(['success' => true, 'message' => 'User(s) deleted successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }
    }
}
