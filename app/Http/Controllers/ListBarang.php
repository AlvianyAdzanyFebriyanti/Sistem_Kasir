<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class ListBarang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_product = Barang::all();
        return view('list_data',compact('data_product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_product = Barang::where('Kode_Barang',$id)->get();
        return view('edit_barang',compact('data_product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =[
            'Kode_Barang' => $request-> kodeBarang,
            'Nama_Barang'=> $request-> namaBarang,
            'Jenis_Barang' => $request-> jenisBarang,
            'QTY' => $request-> qty,
            'Harga' => $request-> harga,
            'Total' => $request-> total,
            'Diskon' => $request-> diskon,
            'Total_Terbaru' => $request-> total_terbaru
        ];

        $data_product = Barang::find($id)->update($data);

        return redirect('/view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();
        return redirect('/view');
    }
}
