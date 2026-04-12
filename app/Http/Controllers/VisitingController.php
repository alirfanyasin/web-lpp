<?php

namespace App\Http\Controllers;

use App\Models\Visiting;
use Illuminate\Http\Request;

class VisitingController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function index()
    {
        $visitings = Visiting::latest()->paginate(10);
        return view('app.visiting', compact('visitings'));
    }

    public function show(Visiting $visiting)
    {
        return view('app.visiting-show', compact('visiting'));
    }

    public function destroy(Visiting $visiting)
    {
        $visiting->delete();
        return redirect()->route('visiting.index')->with('success', 'Data kunjungan berhasil dihapus!');
    }

    public function approve(Visiting $visiting)
    {
        $visiting->update(['approve' => !$visiting->approve]);
        return redirect()->back()->with('success', 'Status kunjungan berhasil diperbarui!');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'wbp_name' => 'required|string|max:255',
            'wbp_registration_number' => 'required|string|max:255',
            'relationship' => 'required|string|max:255',
            'number_of_visitor' => 'required|integer|min:1',
            'visit_date' => 'required|date',
            'visit_session' => 'required|string|max:255',
            'ktp_file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'is_agree' => 'accepted',
        ]);

        // Handle file upload
        if ($request->hasFile('ktp_file')) {
            $file = $request->file('ktp_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('ktp_files', $filename, 'public');
            $validatedData['ktp_file'] = $path;
        }

        $validatedData['is_agree'] = $request->has('is_agree') ? 1 : 0;

        Visiting::create($validatedData);
        return redirect('/#daftar')->with('success', 'Permohonan kunjungan berhasil dikirim!');
    }
}
