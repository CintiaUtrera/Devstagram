@extends('layouts.app')

@section('titulo')
    Editar Perfil:{{auth()->user()->username}}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:1/2 bg:_white shadow p-6">
            <form class="mt-10 md:mt-0" action="">
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Tu Nombre de Usuario" value="{{auth()->user()->username}}"
                            class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" />
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">
                        Imagen Perfil
                    </label>
                    <input type="file" id="imagen" name="imagen" value="{" accept=".jpg, .png, jpeg"
                            class="border p-3 w-full rounded-lg " />
                            
                    
                    <input type="submit" value="Guardar Cambios" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"  />

                </div>
            </form>
        </div>
    </div>
@endsection