<?php

namespace App\Http\Controllers;

use App\Models\Comite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComiteController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:comite-list|comite-create|comite-edit|comite-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:comite-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:comite-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:comite-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $comites = Comite::latest()->paginate(6);
        $ids = [];
        $userNames = [];
        foreach ($comites as $comite) {
            array_push($ids, $comite->com_instructorsolicitante_fk);
        }
        foreach ($ids as $id) {
            $userF = User::find($id);
            array_push($userNames, $userF->name);
        }
        $userLog = Auth::user()->id;
        $user = Auth::user()->load('roles');
        return view('comites.index', compact('comites', 'userNames', 'userLog'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('comites.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'com_fechasolicitud' => 'required',
            'com_descripcionsolicitud' => 'required',
            'com_tipofalta' => 'required',
            'com_carpetanexos' => 'required',
            'com_acta' => 'required',
            'com_estado' => 'required',
            'com_recomendacion' => 'required',
            'com_instructorsolicitante_fk' => 'required',
        ]);

        Comite::create($request->all());

        return redirect()->route('comites.index')
            ->with('success', 'Comite created successfully.');
    }

    public function show(Comite $comite)
    {
        $userName = User::find($comite->com_instructorsolicitante_fk);
        return view('comites.show', compact('comite', 'userName'));
    }

    public function edit(Comite $comite)
    {
        return view('comites.edit', compact('comite'));
    }

    public function update(Request $request, Comite $comite)
    {
        request()->validate([
            'com_fechasolicitud' => 'required',
            'com_descripcionsolicitud' => 'required',
            'com_tipofalta' => 'required',
            'com_carpetanexos' => 'required',
            'com_acta' => 'required',
            'com_estado' => 'required',
            'com_recomendacion' => 'required',
            'com_instructorsolicitante_fk' => 'required',
        ]);
        $comite->update($request->all());

        return redirect()->route('comites.index')
            ->with('success', 'Comite updated successfully');
    }

    public function destroy(Comite $comite)
    {
        $comite->delete();

        return redirect()->route('comites.index')
            ->with('success', 'Comite deleted successfully');
    }
}
