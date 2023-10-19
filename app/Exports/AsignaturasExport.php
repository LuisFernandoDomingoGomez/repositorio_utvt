<?php

namespace App\Exports;

use App\Models\Asignatura;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AsignaturasExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $asignatura = Asignatura::all();

        return view('asignatura.export', [
            'asignaturas' => $asignatura,
        ]);
    }
}
