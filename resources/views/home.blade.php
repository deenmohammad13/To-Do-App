@extends('layouts.index');

@section('title', 'Home Page');

<container class="mx-auto">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20 mt-20">
    <table class="w-full text-sm text-left rtl:text-right text-gray-700 bg-white">
    <thead class="text-xs uppercase text-white bg-gray-800">
        <tr>
            <th scope="col" class="px-6 py-3">
                Product name
            </th>
            <th scope="col" class="px-6 py-3">
                Color
            </th>
            <th scope="col" class="px-6 py-3">
                Category
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Apple MacBook Pro 17"
            </th>
            <td class="px-6 py-4 text-gray-800">
                Silver
            </td>
            <td class="px-6 py-4 text-gray-800">
                Laptop
            </td>
            <td class="px-6 py-4 text-gray-800">
                $2999
            </td>
            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Microsoft Surface Pro
            </th>
            <td class="px-6 py-4 text-gray-800">
                White
            </td>
            <td class="px-6 py-4 text-gray-800">
                Laptop PC
            </td>
            <td class="px-6 py-4 text-gray-800">
                $1999
            </td>
            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Magic Mouse 2
            </th>
            <td class="px-6 py-4 text-gray-800">
                Black
            </td>
            <td class="px-6 py-4 text-gray-800">
                Accessories
            </td>
            <td class="px-6 py-4 text-gray-800">
                $99
            </td>
            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Google Pixel Phone
            </th>
            <td class="px-6 py-4 text-gray-800">
                Gray
            </td>
            <td class="px-6 py-4 text-gray-800">
                Phone
            </td>
            <td class="px-6 py-4 text-gray-800">
                $799
            </td>
            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Apple Watch 5
            </th>
            <td class="px-6 py-4 text-gray-800">
                Red
            </td>
            <td class="px-6 py-4 text-gray-800">
                Wearables
            </td>
            <td class="px-6 py-4 text-gray-800">
                $999
            </td>
            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
            </td>
        </tr>
    </tbody>
</table>
</div>

</container>