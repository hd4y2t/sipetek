<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.admins.mobil.index',[
            'mobil' => mobil::paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.admins.mobil.create');
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
            'nomor' => 'required',
            'kontak' => 'required',
        ]);

        mobil::create($validatedData);
        return redirect('admin/mobil')->with('success', 'Data Mobil Jenazah berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(mobil $mobil)
    {
        return view('dashboards.admins.mobil.detail', [
            'mobil' => $mobil,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(mobil $mobil)
    {
        return view('dashboards.admins.mobil.edit', [
            'mobil' => $mobil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mobil $mobil)
    {
        $rules = [
            'nomor' => 'required',
            'kontak' => 'required',
        ];

        if ($request->id != $mobil->id) {
            $rules['id'] = 'required';
        }

        $validatedData = $request->validate($rules);

        mobil::where('id', $mobil->id)->update($validatedData);
        return redirect('admin/mobil')->with('success', 'Data Mobil Jenazah berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(mobil $mobil)
    {
        mobil::destroy($mobil->id);
        return redirect('admin/mobil')->with('success', 'Data Mobil Jenazah berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $id = SlugService::createSlug(mobil::class, 'id', $request->id);
        return response()->json(['id' => $id]);
    }
}
