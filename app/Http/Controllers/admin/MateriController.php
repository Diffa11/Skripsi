<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MateriRequest;
use App\Models\Material;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Material::with(['categories'])->get();

        return view('pages.admin.materi.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Category::all();
        return view('pages.admin.materi.create', [
            'categories' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MateriRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/materi', 'public'
        );
        $data['audio'] = $request->file('audio')->store(
            'audio/materi', 'public'
        );

        Material::create($data);
        return redirect()->route('materi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Material::findOrFail($id);
        $categories = Category::all();

        return view('pages.admin.materi.edit', [
            'item' => $item,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MateriRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'storage/assets/materi', 'public'
        );

        $item = Material::findOrFail($id);
        $item->update($data);
        return redirect()->route('materi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Material::findOrFail($id);
        $item->delete();

        return redirect()->route('materi.index');
    }
}