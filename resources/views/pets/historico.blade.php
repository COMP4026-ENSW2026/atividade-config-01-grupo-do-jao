<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historico') }}
        </h2>
    </x-slot>

    @foreach($pets as $pet)
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
                                <table class="bg-white border-separate">
                                    <tr>
                                        <th class="text-left px-8 py-4">Nome</th>
                                        <th class="text-left px-8 py-4">Espécie</th>
                                        <th class="text-left px-8 py-4">SubSpecie</th>
                                        <th class="text-left px-8 py-4">Cor</th>
                                        <th class="text-left px-8 py-4">Tamanho</th>
                                        </tr>
                                        <tr>
                                            <td class="px-8 py-4">{{ $pet->name_pet }}</td>
                                            <td class="px-8 py-4">{{ $pet->specie }}</td>
                                            <td class="px-8 py-4">{{ $pet->subspecie }}</td>
                                            <td class="px-8 py-4">{{ $pet->color }}</td>
                                            <td class="px-8 py-4">{{ $pet->size }}</td>
                                        </tr>
                                    </table>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</x-app-layout>
