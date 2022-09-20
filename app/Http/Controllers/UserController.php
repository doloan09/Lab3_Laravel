<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkAdmin(){
        $isAdmin = Auth::user();
        if ($isAdmin) {
            return $isAdmin->isAdmin();
        }
        return 2;
    }

    public function index()
    {
        if ($this->checkAdmin() == 1) {
            $list = User::whereNot('is_admin', 1)->paginate(20);
            return view('user.list_user', compact('list'));
        }elseif ($this->checkAdmin() == 0){
            return redirect()->route('home');
        }else {
            return redirect()->route('login.request');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ($this->checkAdmin()) {
            return view('user.create');
        }

        return abort(403, 'Unauthorized action.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => '0'
        ]);

        return redirect()->route('auth.admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if ($this->checkAdmin()) {

            return view('user.update', compact('user'));
        }
        return abort(403, 'Unauthorized action.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        if ($request->name == "") {
            return redirect()->route('auth.admin.users.edit', ['user' => $user]);
        } else {
            $user->update(['name' => $request->name]);
            return redirect()->route('auth.admin.users.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($this->checkAdmin()) {

            $user->delete();
            return redirect()->route('auth.admin.users.index');
        }
        return abort(403, 'Unauthorized action.');
    }
}
