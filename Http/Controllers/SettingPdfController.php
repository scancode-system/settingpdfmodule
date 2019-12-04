<?php

namespace Modules\SettingPdf\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\SettingPdf\Entities\SettingPdf;

class SettingPdfController extends Controller
{

    public function update(Request $request, SettingPdf $setting_pdf)
    {
        $setting_pdf->update($request->all());
        return back()->with('success', 'Configuração de PDF alterado.');
    }

}
