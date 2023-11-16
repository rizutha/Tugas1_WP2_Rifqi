<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Lecturer::orderBy('id', 'desc')->paginate(5);
        return view('lecturers.index', compact('dosen'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menuju view create.blade.php di folder lecturers
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // lakukan validasi untuk setiap request yang dikirim
        $request->validate([
            'nip' => 'required|max:8',
            'nama' => 'required|max:30',
            'keilmuan' => 'required|max:30',
            'foto' => 'required|mimes:jpeg,jpg,png,gif'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        // lakukan create/insert data ke tabel database
        $dosen = Lecturer::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'keilmuan' => $request->keilmuan,
            'foto' => $foto_nama
        ]);

        

        // bisa juga langsung menggunakan request all untuk create data
        // $dosen = Lecturer::create($request->all());
        return redirect('/lecturers')->with('success', 'Lecturer created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // menuju view show.blade.php di folder lecturers dengan membawa data dari pencarian
        $dosen = Lecturer::findOrFail($id);
        return view('lecturers.show', compact('dosen'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // menuju view edit.blade.php di folder lecturers dengan membawa data dari pencarian
        $dosen = Lecturer::findOrFail($id);
        return view('lecturers.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // lakukan validasi untuk setiap request yang masuk
        $request->validate([
            'nip' => 'required|max:8',
            'nama' => 'required|max:30',
            'keilmuan' => 'required|max:30',
        ]);
        // Cari data sesuai parameter $id dan lakukan update data tabel dari seluruh request
        $dosen = Lecturer::findOrFail($id);
        $dosen->update($request->all());
        return redirect('/lecturers')->with('success', 'Lecturers updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus data dari record terpilih berdasarkan $id

        $dosen = Lecturer::where('id', $id)->first();
        File::delete(public_path('foto') .'/'. $dosen->foto);

        Lecturer::where('id', $id)->delete();
        return redirect('/lecturers')->with('success', 'Lecturers deleted successfully.');
    }
}
