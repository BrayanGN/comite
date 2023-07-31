<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:programa-list|programa-create|programa-edit|programa-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:programa-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:programa-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:programa-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $programas = Programa::latest()->paginate(5);
        return view('programas.index', compact('programas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('programas.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'pro_codigo' => 'required',
            'pro_nombre' => 'required',
            'pro_nivelformacion' => 'required',
        ]);

        Programa::create($request->all());

        return redirect()->route('programas.index')
            ->with('success', 'Programa created successfully.');
    }

    public function show(Programa $programa)
    {
        return view('programas.show', compact('programa'));
    }

    public function edit(Programa $programa)
    {
        return view('programas.edit', compact('programa'));
    }

    public function update(Request $request, Programa $programa)
    {
        request()->validate([
            'pro_codigo' => 'required',
            'pro_nombre' => 'required',
            'pro_nivelformacion' => 'required',
        ]);

        $programa->update($request->all());

        return redirect()->route('programas.index')
            ->with('success', 'Programa updated successfully');
    }

    public function destroy(Programa $programa)
    {
        $programa->delete();

        return redirect()->route('programas.index')
            ->with('success', 'Programa deleted successfully');
    }
}
