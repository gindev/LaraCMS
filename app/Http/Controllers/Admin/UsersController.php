<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('can:manageUsers,App\Models\User');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index')->with('model', User::paginate(20));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        if(Auth::user()->id == $user->id) {
            return redirect()->route('users.index')->with('status', 'You cannot edit yourself.');
        }

        return view('admin.users.edit',[
            'model' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if(Auth::user()->id == $user->id) {
            return redirect()->route('users.index')->with('status', 'You cannot edit yourself.');
        }

        $user->roles()->sync($request->roles);

        return redirect()->route('users.index')->with('status', "$user->name was updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
