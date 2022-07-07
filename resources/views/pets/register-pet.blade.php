<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-20">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-auto bg-white border-b border-gray-200">
                    <form class="py-8 px-8" action="/pets" method="post">
                        @csrf
                        <div class="py-2 flex flex-row">
                            <div class="basis-1/2">
                                <input class ="text-sm rounded-lg" id="name" name="name" type="text" placeholder="Nome" /> <br/>
                            </div>
                            <div class="basis-1/2">
                                <input class ="text-sm rounded-lg" id="color" name="color" type="text" placeholder="Cor" /> <br/>
                            </div>

                        </div>

                        <div class="py-2 flex flex-row">
                            <div class="basis-1/2">
                                <select class ="text-sm rounded-lg" name="specie" id="specie">
                                    <option value="bird">Bird</option>
                                    <option value="bunny">Bunny</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                            <div class="basis-1/2">
                                <input class ="text-sm rounded-lg" id="SubSpecies" name="SubSpecies" type="text" placeholder="SubSpecie" /> <br/>
                            </div>
                        </div>

                        <div class="py-2 flex flex-row">
                            <div class="basis-1/2">
                                <select class ="text-sm rounded-lg" name="size" id="size">
                                    <option value="xs">XS</option>
                                    <option value="sm">SM</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                </select>
                            </div>
                            <div class="basis-1/2">                     
                                    <input class ="text-sm rounded-lg" id="SizeM" name="SizeM" type="text" placeholder="SizeMedida"/> <br/>
                            </div>
                        </div>

                        <br/>
                        <!-- <button type="submit">
                            Cadastrar
                        </button> -->
                        <div class="grid justify-items-center">
                            <div>
                            <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Salvar
                            </button>    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
</x-app-layout>