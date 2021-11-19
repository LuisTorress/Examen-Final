<?php

namespace App\Http\Livewire\Productos;

use App\Http\Controllers\Productos;
use App\Models\Producto;
use Livewire\Component;

class IndexProductos extends Component
{
    public function render()
    {
        $productos = Producto::paginate(20);
        return view('livewire.productos.index-productos', compact('productos'));
    }
}
