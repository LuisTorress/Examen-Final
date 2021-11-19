<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function create()
    {
    $empresas = new Empresas();
    $empresas->nombre = 'Unlife';
    $empresas->rfc = 'UN178T7276876G';
    $empresas->direccion = 'Av. Sinaloa y calle 54';
    $empresas->numero = 6531234566;
    $empresas->codigo_postal = 83466;
    $empresas->save();

    $empresas = new Empresas();
    $empresas->nombre = 'Unlife 2.0';
    $empresas->rfc = 'UN278T457687Y2';
    $empresas->direccion = 'Av. Sinaloa y calle 4';
    $empresas->numero = 6539875567;
    $empresas->codigo_postal = 83462;
    $empresas->save();

    $empresas = new Empresas();
    $empresas->nombre = 'Unlife 3.0';
    $empresas->rfc = 'UN378T727687T3';
    $empresas->direccion = 'Av. Tlaxcala y calle 5';
    $empresas->numero = 6537652343;
    $empresas->codigo_postal = 83463;
    $empresas->save();

    $empresas = new Empresas();
    $empresas->nombre = 'Unlife 4.0';
    $empresas->rfc = 'UN478T727687R4';
    $empresas->direccion = 'Av. Oaxaca y calle 34';
    $empresas->numero = 6535436789;
    $empresas->codigo_postal = 83464;
    $empresas->save();

    $empresas = new Empresas();
    $empresas->nombre = 'Unlife 5.0';
    $empresas->rfc = 'UN578T727687J5';
    $empresas->direccion = 'Av. Revolucion y calle 13';
    $empresas->numero = 6534537788;
    $empresas->codigo_postal = 83465;
    $empresas->save();
    }

}

