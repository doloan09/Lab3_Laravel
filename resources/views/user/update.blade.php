@extends('user.layout.main')

@section('title', 'Update User')

@section('content')
    <div class="grid grid-cols-3 mt-10 h-screen">
        <div class="hidden md:block col-span-1"></div>
        <div class="md:col-span-1 col-span-3">
            <h1 class="text-center font-bold text-3xl">Update User</h1>
            <form action="{{ route('auth.admin.users.update', ['user' => $user]) }}" method="POST">
                @csrf
                <div class="mt-10">
                    <p class="pr-3">UserName:</p>
                    <input type="text" name="name" class="border border-gray-300 p-2 w-full" placeholder="User name" value="{{$user->name}}"><br>
                </div>
                @if($errors->has('name'))
                    <div class="text-left text-red-600 mt-2">{{ $errors->first('name') }}</div>
                @endif
                <div class="my-6">
                    <p class="pr-3">Email:</p>
                    <p class="border border-gray-300 p-2 w-full">{{$user->email}}</p><br>
                </div>

                <input type="submit" class="border p-3 rounded-xl text-gray-600 hover:text-black cursor-pointer bg-gray-200 hover:bg-white" value="Update"><br>

            </form>
        </div>
        <div class="hidden md:block col-span-1"></div>
    </div>

@endsection
