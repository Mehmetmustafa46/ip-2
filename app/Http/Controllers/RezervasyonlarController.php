<?php

namespace App\Http\Controllers;

use App\Models\rezervasyonlar;
use Illuminate\Http\Request;

class RezervasyonlarController extends Controller
{
    public function index() {
        $rezervasyonlar = rezervasyonlar::all();
        return view('rezervasyonlar', compact('rezervasyonlar'));
    }

    public function create() {
        return view('rezervasyonlar.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'otel_id' => 'required',           // Otel ID
            'kullanici_id' => 'required',      // Kullanıcı ID
            'giris_tarihi' => 'required|date', // Giriş Tarihi
            'cikis_tarihi' => 'required|date|after:giris_tarihi', // Çıkış Tarihi
        ]);

        rezervasyonlar::create($validated);

        return redirect()->route('rezervasyonlar.index')->with('success', 'Rezervasyon başarıyla oluşturuldu!');
    }

    public function edit(Rezervasyonlar  $rezervasyon) {
        return view('rezervasyonlar.edit', compact('rezervasyon'));
    }

    public function update(Request $request, Rezervasyonlar $rezervasyon) {
        $validated = $request->validate([
            'giris_tarihi' => 'required|date',
            'cikis_tarihi' => 'required|date|after:giris_tarihi',
        ]);

        $rezervasyon->update($validated);

        return redirect()->route('rezervasyonlar.index')->with('success', 'Rezervasyon başarıyla güncellendi!');
    }

    public function destroy(Rezervasyon $rezervasyon) {
        $rezervasyon->delete();
        return redirect()->route('rezervasyonlar.index')->with('success', 'Rezervasyon başarıyla silindi!');
    }

}

