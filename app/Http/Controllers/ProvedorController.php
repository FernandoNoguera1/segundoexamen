<?php

namespace App\Http\Controllers;

use App\Models\Provedor;
use Illuminate\Http\Request;

class ProvedorController extends Controller
{
    public function index(){
        $provedores = Provedor::all();
        return view('provedor.provedor',compact('provedores'));
    }

    public function create(){
        return view('provedor.create');
    }

    public function store(Request $request){
        $provedor = new Provedor();
        $provedor->nombre = $request->nombre;
        $provedor->codigo = $request->codigo;

        $provedor->save();
        return to_route('provedor.index');
    }
 

    public function edit($id){
        $provedor = Provedor::find($id);
        return view('provedor.edit',compact('provedor'));
    }

    public function update(Request $request, $id){
        $provedor = Provedor::find($id);
        $provedor->nombre = $request->nombre;
        $provedor->codigo = $request->codigo;
        $provedor->save();
        return to_route('provedor.index');
    }

    public function destroy($id){
        Provedor::destroy($id);
        return to_route('provedor.index');
    }
}
