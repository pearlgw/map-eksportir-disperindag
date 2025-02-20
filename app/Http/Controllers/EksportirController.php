<?php

namespace App\Http\Controllers;

use App\Imports\EksportirImport;
use App\Models\Cities;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EksportirController extends Controller
{
    public function create()
    {
        return view('eksportir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new EksportirImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data berhasil diimpor!');
    }

    public function exportCsv(Cities $city)
    {
        $fileName = 'exportir_' . strtolower(str_replace(' ', '_', $city->name)) . '.csv';

        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=\"$fileName\"",
        ];

        $callback = function () use ($city) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['Nama Eksportir']); // Header CSV

            foreach ($city->eksportirs as $eksportir) {
                fputcsv($handle, [$eksportir->nama_eksportir]);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }
}
