<?php

namespace App\Http\Controllers;

use App\Models\non_perizinan;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminNonPerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.admins.non_perizinan.index',[
            'non_perizinan' => non_perizinan::paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.admins.non_perizinan.create');
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

        non_perizinan::create($validatedData);
        return redirect('admin/non_perizinan')->with('success', 'Non Perizinan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\non_perizinan  $non_perizinan
     * @return \Illuminate\Http\Response
     */
    public function show(non_perizinan $non_perizinan)
    {
        return view('dashboards.admins.non_perizinan.detail', [
            'non_perizinan' => $non_perizinan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\non_perizinan  $non_perizinan
     * @return \Illuminate\Http\Response
     */
    public function edit(non_perizinan $non_perizinan)
    {
        return view('dashboards.admins.non_perizinan.edit', [
            'non_perizinan' => $non_perizinan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\non_perizinan  $non_perizinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, non_perizinan $non_perizinan)
    {
        $rules = [
            'nama_perizinan' => 'required',
            'persyaratan' => 'required',
        ];

        if ($request->id != $non_perizinan->id) {
            $rules['id'] = 'required';
        }

        $validatedData = $request->validate($rules);

        non_perizinan::where('id', $non_perizinan->id)->update($validatedData);
        return redirect('admin/non_perizinan')->with('success', 'Non Perizinan berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\non_perizinan  $non_perizinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(non_perizinan $non_perizinan)
    {
        non_perizinan::destroy($non_perizinan->id);
        return redirect('admin/non_perizinan')->with('success', 'Non Perizinan berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(non_perizinan::class, 'slug', $request->nama_perizinan);
        return response()->json(['slug' => $slug]);
    }
}
