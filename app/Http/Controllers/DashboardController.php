<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Profile;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class DashboardController extends Controller
{
    public function index(){
        $testimonial = Testimonial::orderByDesc('tanggal')->get();
        $artikel = Home::orderByDesc('tanggal')->get();
        return view('dashboard', compact('artikel', 'testimonial'));
    }

    public function tambah_artikel(){
        return view('artikel');
    }

    public function simpan_artikel(Request $request){
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image',
            'article' => 'required',
        ],[
            'judul.required' => 'Judul harus diisi',
            'kategori.required' => 'Pilih kategori',
            'gambar.required' => 'Harus mengupload gambar',
            'gambar.image' => 'Harus format gambar',
            'article.required' => 'Artikel harus diisi'
        ]);

        try {
            $path = storage_path('app/public/gambar');
            if (!File::exists($path)) {
                File::makeDirectory($path);
            }

            $file = $request->file('gambar');
            $filename = time().rand().'.'.$file->getClientOriginalExtension();

            $file->move($path, $filename);
            Home::create([
                'slug' => Str::slug($request->judul, '-'),
                'judul' => $request->judul,
                'gambar' => $filename,
                'isi' => $request->article,
                'kategori' => $request->kategori,
                'tanggal' => now()
            ]);

            return redirect('dashboard')->with(['message' => 'Data berhasil disimpan']);
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => 'data gagal disimpan']);
        }
    }

    public function hapus_artikel($id){
        $artikel = Home::findOrFail($id);
        Storage::disk('local')->delete('public/storage/'.$artikel->image);
        $artikel->delete();
        
        if($artikel){
            return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           return redirect()->route('dashboard')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    public function edit_artikel($id){
        $artikel = Home::findOrFail($id);
        $url = route('update_artikel', $id);
        return view('artikel', compact('artikel', 'url'));
    }

    public function update_artikel(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'article' => 'required',
        ],[
            'judul.required' => 'Judul harus diisi',
            'kategori.required' => 'Pilih kategori',
            'article.required' => 'Artikel harus diisi'
        ]);

        try {
            $artikel = Home::findOrFail($id);
            $path = storage_path('app/public/gambar');
            if ($request->file('gambar')) {
                if (!File::exists($path)) {
                    File::makeDirectory($path);
                }

                Storage::disk('local')->delete('public/storage/'.$artikel->image);
                $file = $request->file('gambar');
                $filename = time().rand().'.'.$file->getClientOriginalExtension();
    
                $file->move($path, $filename);
                $artikel->gambar = $filename;
            }

            $artikel->judul = $request->judul;
            $artikel->kategori = $request->kategori;
            $artikel->isi = $request->article;
            $artikel->save();

            return redirect('dashboard')->with(['message' => 'Data berhasil disimpan']); 
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }

    // testimonials

    public function tambah_testimonial(){
        return view('testimonial');
    }

    public function simpan_testimonial(Request $request){
        $request->validate([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'testimonial' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi',
            'pekerjaan.required' => 'Pekerjaan kategori',
            'testimonial.required' => 'Testimonial harus diisi'
        ]);

        try {
            Testimonial::create([
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'testimonial' => $request->testimonial,
                'tanggal' => now()
            ]);

            return redirect('dashboard')->with(['message' => 'Data berhasil disimpan']);
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => 'data gagal disimpan']);
        }
    }

    public function hapus_testimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        
        if($testimonial){
            return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           return redirect()->route('dashboard')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }

    public function edit_testimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        $url = route('update_testimonial', $id);
        return view('testimonial', compact('testimonial', 'url'));
    }

    public function update_testimonial(Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'testimonial' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi',
            'pekerjaan.required' => 'Pekerjaan harus diisi',
            'testimonial.required' => 'Testimonial harus diisi'
        ]);

        try {
            $testimonial = Testimonial::findOrFail($id);
            
            $testimonial->nama = $request->nama;
            $testimonial->pekerjaan = $request->pekerjaan;
            $testimonial->testimonial = $request->testimonial;
            $testimonial->save();



            return redirect('dashboard')->with(['message' => 'Data berhasil disimpan']); 
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => $th->getMessage()]);
        }
    }

}
