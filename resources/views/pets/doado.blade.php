<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pets Doados') }}
        </h2>
    </x-slot>
    
    <!-- @foreach($pets as $pet) -->
        <div class="pt-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-20">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-auto bg-white border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="flex w-40 h-40">
                                <img src="{{ url('imgs/dog1.jpg') }}" style="width:auto ; height:auto">
                            </div>
                            <div class="justify-content" style="font-size:25px">
                                <h1>
                                <!-- <table class="bg-white border-separate">
                                    <tr>
                                        <th class="text-left px-8 py-4">Nome</th>
                                        <th class="text-left px-8 py-4">Espécie</th>
                                        <th class="text-left px-8 py-4">SubSpecie</th>
                                        <th class="text-left px-8 py-4">Cor</th>
                                        <th class="text-left px-8 py-4">Tamanho</th>
                                        </tr>
                                        <tr>
                                            <td class="px-8 py-4">{{ $pet->name }}</td>
                                            <td class="px-8 py-4">{{ $pet->specie }}</td>
                                            <td class="px-8 py-4">{{ $pet->subspecie }}</td>
                                            <td class="px-8 py-4">{{ $pet->color }}</td>
                                            <td class="px-8 py-4">{{ $pet->size }}</td>
                                            <td>
                                                <a style="color: red" href="{{ route('delete-pet', $pet->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                                </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </table> -->
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- @endforeach -->

    <div class="grid justify-items-center py-10">
        <div>
            <button  class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <a href="{{ route('register-pet') }}">Registrar Novo</a>
            </button>    
        </div>
    </div>
        
</x-app-layout>