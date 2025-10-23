@extends('layouts.index');

@section('title', 'Home Page');

<container class="mx-auto">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20 mt-20">
    <table class="w-full text-sm text-left rtl:text-right text-gray-700 bg-white">
    <thead class="text-xs uppercase text-white bg-gray-800">
        <tr>
            <th scope="col" class="px-6 py-3">
                Product Image
            </th>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($todos as $todo)
            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                <img class="w-12 h-12" src="pictures/{{$todo->picture}}" alt="">
            </th>
            <td class="px-6 py-4 text-gray-800">
               {{$todo->name}}
            </td>
            <td class="px-6 py-4 text-gray-800">
                {{$todo->price}}
            </td>
            <td class="px-6 py-4 font-bold {{$todo->complete? 'text-green-600':'text-red-600'}}">
                <form action="/todos/status/{{$todo->id}}" method="POST"class="cursor-pointer">
                    @csrf
                    @method('PATCH')
                    <button type="submit">
                            {{$todo->complete? 'Completed':'Pending'}}
                    </button>
                </form>
                
            </td>
            <td class="px-6 py-4 flex justify-center gap-2 items-center" >
                <a href="#" class="font-medium px-4 py-2 rounded bg-blue-900 text-white">Edit</a>
                <form action="/todos/delete/{{$todo->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="font-medium px-4 py-2 rounded bg-red-900 text-white">Delete</button>
                </form>
        
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>
</div>

</container>