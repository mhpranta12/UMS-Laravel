<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @include('layouts.navBar')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- <x-jet-welcome /> -->
               <a href="/addemployee "> <input type="button" > <font color="blue"> <img src="https://img.icons8.com/ios-glyphs/15/000000/add-user-male.png"/> Add  Employee  </a>  </font> <hr>
               <a href="/employee"> <input type="button" >   <font color="blue"> <img src="https://img.icons8.com/ios-filled/15/000000/list.png"/> Employee  List </a>  </font>   <hr>
               <a href="/employee"> <input type="button" >   <font color="blue">  <img src="https://img.icons8.com/ios-glyphs/15/000000/edit-user-male.png"/>  Update Employee   </a>  </font>   <hr>
               <a href="/employee"> <input type="button" >   <font color="blue">  <img src="https://img.icons8.com/ios-glyphs/15/000000/filled-trash.png"/> Delete Employee   </a>  </font>   <hr>

            </div>
        </div>
    </div>
</x-app-layout>
