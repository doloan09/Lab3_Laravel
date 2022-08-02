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
        if ($this->checkAdmin()) {
            $list = User::paginate(20);
            return view('user.list_user', compact('list'));
        }elseif (!$this->checkAdmin()){
            return redirect('/home');
        }else {
            return redirect('/login');
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

    public function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => '0'
        ]);
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
        $this->createUser($request->all());

        return redirect('/auth/admin/list-user');
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
    public function edit($id)
    {
        if ($this->checkAdmin()) {
            $item = User::findOrFail($id);

            return view('user.update', compact('item'));
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        if ($request->name == "") {
            return redirect("/auth/admin/edit-user/$id");
        } else {
            User::findOrFail($id)->update(['name' => $request->name]);
            return redirect('/auth/admin/list-user');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->checkAdmin()) {
            User::findOrFail($id)->delete();
            return redirect('/auth/admin/list-user');
        }
        return abort(403, 'Unauthorized action.');
    }
}