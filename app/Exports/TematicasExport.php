<?php

namespace App\Exports;

use App\Models\Tematica;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TematicasExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $tematica = Tematica::all();

        return view('tematica.export', [
            'tematicas' => $tematica,
        ]);
    }
}
