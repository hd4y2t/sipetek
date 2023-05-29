<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminPerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.admins.perizinan.index',[
            'perizinan' => Perizinan::paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.admins.perizinan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_perizinan' => 'required',
            'persyaratan' => 'required',
        ]);

        Perizinan::create($validatedData);
        return redirect('admin/perizinan')->with('success', 'Perizinan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function show(Perizinan $perizinan)
    {
        return view('dashboards.admins.perizinan.detail', [
            'perizinan' => $perizinan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perizinan $perizinan)
    {
        return view('dashboards.admins.perizinan.edit', [
            'perizinan' => $perizinan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perizinan $perizinan)
    {
        $rules = [
            'nama_perizinan' => 'required',
            'persyaratan' => 'required',
        ];

        if ($request->id != $perizinan->id) {
            $rules['id'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Perizinan::where('id', $perizinan->id)->update($validatedData);
        return redirect('admin/perizinan')->with('success', 'Perusahaan berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perizinan $perizinan)
    {
        Perizinan::destroy($perizinan->id);
        return redirect('admin/perizinan')->with('success', 'Perizinan berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Perizinan::class, 'slug', $request->nama_perizinan);
        return response()->json(['slug' => $slug]);
    }
}
