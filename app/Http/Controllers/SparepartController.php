<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        $data = Sparepart::all();
        return view('sparepart.index', compact('data'));
    }

    public function create()
    {
        return view('sparepart.create');
    }

    public function store(Request $request)
    {
        Sparepart::create($request->all());
        return redirect()->route('sparepart.index');
    }

    public function edit($id)
    {
        $data = Sparepart::findOrFail($id);
        return view('sparepart.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Sparepart::findOrFail($id);
        $data->update($request->all());
        
        return redirect()->route('sparepart.index');
    }

    public function destroy($id)
    {
        Sparepart::destroy($id);
        return redirect()->route('sparepart.index');
    }
}
