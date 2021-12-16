<?php

use App\Http\Livewire\Animales\AnimalesCreate;
use App\Http\Livewire\Animales\AnimalesDelete;
use App\Http\Livewire\Animales\AnimalesEdit;
use App\Http\Livewire\Animales\AnimalesMostrar;
use App\Http\Livewire\Animales\IndexAnimales;

use App\Http\Livewire\Login\Login;

use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\MostrarUsuario;
use Illuminate\Support\Facades\Route;

        Route::get('/login',Login::class)->name('login');
////
        Route::group(['middleware'=>'auth'], function () {

        Route::get('/animales', IndexAnimales::class)->name('animales');
        Route::get('/animales/crear', AnimalesCreate::class)->name('animales.crear');
        Route::get('/animales/{animales}/edit', AnimalesEdit::class)->name('animales.edit');
        Route::get('/animales/{animales}/delete', AnimalesDelete::class)->name('animales.delete');
        Route::get('/animales/{animales}/mostrar', AnimalesMostrar::class)->name('animales.mostrar');

        Route::get('/usuarios', IndexUsuarios::class)->name('usuarios');
    /*  Route::get('/usuarios/crear', CreateUsuario::class)->name('usuarios.crear');
        Route::get('/usuarios/{usuarios}/mostrar', EditUsuario::class)->name('usuarios.edit');
        Route::get('/usuarios/{usuarios}/delete', DeleteUsuario::class)->name('usuarios.delete');
        Route::get('/usuarios/{usuarios}/delete', MostrarUsuario::class)->name('usuarios.mostrar');*/
});
