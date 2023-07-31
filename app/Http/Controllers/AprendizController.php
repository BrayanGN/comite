<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use Illuminate\Http\Request;

class AprendizController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:aprendiz-list|aprendiz-create|aprendiz-edit|aprendiz-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:aprendiz-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:aprendiz-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:aprendiz-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $aprendizs = Aprendiz::latest()->paginate(5);
        return view('aprendizs.index', compact('aprendizs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('aprendizs.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'apr_identificacion' => 'required',
            'apr_nombres' => 'required',
            'apr_apellidos' => 'required',
            'apr_email' => 'required',
            'apr_telefono' => 'required',
            'apr_direccion' => 'required',
            'apr_fechanacimiento' => 'required',
            'apr_grupo_fk' => 'required',
        ]);

        Aprendiz::create($request->all());

        return redirect()->route('aprendizs.index')
            ->with('success', 'Aprendiz created successfully.');
    }

    public function show(Aprendiz $aprendiz)
    {
        return view('aprendizs.show', compact('aprendiz'));
    }

    public function edit(Aprendiz $aprendiz)
    {
        return view('aprendizs.edit', compact('aprendiz'));
    }

    public function update(Request $request, Aprendiz $aprendiz)
    {
        request()->validate([
            'apr_identificacion' => 'required',
            'apr_nombres' => 'required',
            'apr_apellidos' => 'required',
            'apr_email' => 'required',
            'apr_telefono' => 'required',
            'apr_direccion' => 'required',
            'apr_fechanacimiento' => 'required',
            'apr_grupo_fk' => 'required',
        ]);
        $aprendiz->update($request->all());

        return redirect()->route('aprendizs.index')
            ->with('success', 'Aprendiz updated successfully');
    }

    public function destroy(Aprendiz $aprendiz)
    {
        $aprendiz->delete();

        return redirect()->route('aprendizs.index')
            ->with('success', 'Aprendiz deleted successfully');
    }
}
