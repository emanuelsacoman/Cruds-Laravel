<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create() {
        return view('funcionarios.create');
    }

    public function store(Request $request) {
        Funcionario::create($request->all());
        return redirect()->route('funcionarios.index');
    }

    public function edit(Funcionario $funcionario) {
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(Request $request, Funcionario $funcionario) {
        $funcionario->update($request->all());
        return redirect()->route('funcionarios.index');
    }

    public function destroy(Funcionario $funcionario) {
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
