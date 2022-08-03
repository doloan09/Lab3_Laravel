@extends('user.layout.main')

@section('title', 'List User')

@section('content')
    <div class="overflow-scroll">
        <p class="text-2xl">List User</p>
        <table class="table-auto my-10 w-full">
            <thead>
            <tr class="text-left">
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $ls)
                <tr>
                    <td>{{$ls->id}}</td>
                    <td>{{$ls->name}}</td>
                    <td>{{$ls->email}}</td>
                    <td class="flex">
                        <a href="{{ route('auth-admin.edit-user', ['user' => $ls]) }}" class="cursor-pointer text-blue-600">Update</a>
                        <p class="px-3">/</p>
                        <form action="{{ route('auth-admin.delete-user', ['user' => $ls]) }}" method="POST">
                            @csrf
                            {{ method_field('delete') }}
                            <button class="cursor-pointer text-red-600" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-10">
        {{ $list->links('pagination::tailwind') }}
    </div>

    <div class="py-14">
        <a href="{{ route('auth-admin.register.request') }}" class="border border-gray-400 p-4 rounded-xl text-gray-600 bg-gray-200 hover:bg-white hover:text-black">Create User</a>
    </div>
@endsection


