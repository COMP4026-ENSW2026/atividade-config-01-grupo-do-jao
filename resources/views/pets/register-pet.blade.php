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
                    <form class="py-8 px-8" action="{{ route('register-pet') }}" method="post">
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
                                    <option value="Pássaro">Pássaro</option>
                                    <option value="Coelho">Coelho</option>
                                    <option value="Cachorro">Cachorro</option>
                                    <option value="Gato">Gato</option>
                                </select>
                            </div>
                            <div class="basis-1/2">
                                <input class ="text-sm rounded-lg" id="subspecie" name="subspecie" type="text" placeholder="SubSpecie" /> <br/>
                            </div>
                        </div>

                        <div class="py-2 flex flex-row">
                            <div class="basis-1/2">
                                <select class ="text-sm rounded-lg" name="size" id="size">
                                    <option value="XS">XS</option>
                                    <option value="SM">SM</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <div class="basis-1/2">                     
                                <input class ="text-sm rounded-lg" id="meters" name="meters" type="text" placeholder="Tamanho CM"/> <br/>
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