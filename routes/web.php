<?php

//use App\Http\Controllers\AlumnoController;
//use App\Http\Controllers\EmpresasController;
//use App\Http\Controllers\Productos;
//use App\Http\Controllers\usuarioController;
use App\Http\Livewire\Empleados\IndexEmpleados;
use App\Http\Livewire\Empleados\CreateEmpleado;
use App\Http\Livewire\Empleados\EmpleadosDelete;
use App\Http\Livewire\Empleados\EmpleadosEdit;
use App\Http\Livewire\Empleados\EmpleadosMostrar;
//use App\Http\Livewire\Productos\CreateProducto;
//use App\Http\Livewire\Productos\IndexProductos;
use App\Models\Empleado;
//use App\Models\Empresas;
//use App\Models\Producto;
use Illuminate\Support\Facades\Route;

// Route::get('/Empresas', [EmpresasIndex::class, 'render']);

// Route::get('/empresas/luiscuri', [EmpresasController::class, 'create']);
// Route::get('/alumnos/create', [AlumnoController::class, 'crear']);

// Route::get('/ususarios', [usuarioController::class, 'index']);
// Route::get('/usuarios/create', [usuarioController::class, 'create']);

//Route::get('/productos', IndexProductos::class)->name('productos');
//Route::get('/productos/crear', CreateProducto::class)->name('productos.crear');

Route::get('/empleados', IndexEmpleados::class)->name('empleados');
Route::get('/empleados/crear', CreateEmpleado::class)->name('empleados.crear');
Route::get('/empleados/{empleados}/edit', EmpleadosEdit::class)->name('empleados.edit');
Route::get('/empleados/{empleados}/delete', EmpleadosDelete::class)->name('empleados.delete');
Route::get('/empleados/{empleados}/mostrar', EmpleadosMostrar::class)->name('empleados.mostrar');
