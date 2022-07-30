<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $email = $user['email'];
            if ($email == 'admin@gmail.com') {
                $list = User::select('*')->paginate(20);
                return view('user.list_user', compact('list'));
            }else{
                return redirect('/login');
            }
        }

        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $email = $user['email'];
            if ($email == 'admin@gmail.com') {
                return view('user.create');
            }
        }
        return abort(403, 'Unauthorized action.');
    }

    public function createUser(array $data)
    {
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=> Hash::make($data['password'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $data = $request->all();
        $check = $this->createUser($data);

        return redirect('/auth/admin/list-user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $email = $user['email'];
            if ($email == 'admin@gmail.com') {
                $item = User::where('id', $id)->first();
                return view('user.update', compact('item'));
            }
        }
        return abort(403, 'Unauthorized action.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
        ]);

        $name = $request->name;

        if ($name == "") {
            header("Location: /auth/admin/edit-user/$id");
        } else {
            if(User::where('id', $id)->exists()) {
                User::where('id', $id)->update(['name' => $name]);

                header("Location: /auth/admin/list-user");
            }else{
                abort(404); // Not found
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $email = $user['email'];
            if ($email == 'admin@gmail.com') {
                if (User::where('id', $id)->exists()) {
                    User::find($id)->delete();
                    header('Location: /auth/admin/list-user');
                } else {
                    abort(404); // Not found
                }
            }
        }
        return abort(403, 'Unauthorized action.');
    }
}
