@extends('user.layout.main')

@section('title', 'Create User')

@section('content')
    <div class="grid grid-cols-3 mt-10 h-screen">
        <div class="hidden md:block col-span-1"></div>
        <div class="md:col-span-1 col-span-3">
            <h1 class="text-center font-bold text-3xl">Register User</h1>
            <form action="/auth/admin/register" method="POST">
                @csrf
                <div class="mt-10">
                    <p class="pr-3">UserName:</p>
                    <input type="text" name="name" class="border border-gray-300 p-2 w-full" placeholder="User name" required><br>
                </div>
                @if($errors->has('name'))
                    <div class="text-left text-red-600 mt-2">{{ $errors->first('name') }}</div>
                @endif
                <div class="mt-6">
                    <p class="pr-3">Email:</p>
                    <input type="text" name="email" class="border border-gray-300 p-2 w-full" placeholder="Email" required><br>
                </div>
                @if($errors->has('email'))
                    <div class="text-left text-red-600 mt-2">{{ $errors->first('email') }}</div>
                @endif
                <div class="mt-6">
                    <p class="pr-3">Password:</p>
                    <input type="text" name="password" class="border border-gray-300 p-2 w-full" placeholder="Password" required><br>
                </div>
                @if($errors->has('password'))
                    <div class="text-left text-red-600 mt-2">{{ $errors->first('password') }}</div>
                @endif

                <input type="submit" value="Register" class="mt-10 border p-3 rounded-xl text-gray-600 hover:text-black cursor-pointer bg-gray-200 hover:bg-white"><br>
            </form>
        </div>
        <div class="hidden md:block col-span-1"></div>
    </div>

@endsection
