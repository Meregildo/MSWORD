<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\User;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Style;
use PhpOffice\PhpWord\TemplateProcessor;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function registrar(Request $request){
        ini_set('max_execution_time', 7200);
        if(null !== $request->get('pdf')){
            for ($i=0; $i < count($request->get('pdf')); $i++) {
                $this->funcionPDF($request->get('pdf')[$i]);
            } 
        }
        return redirect()->back()->with('success', 'PDF creado');
    }

    public function funcionPDF($id){
        $filename = "plantilla";
        $templateProcessor = new TemplateProcessor($filename . '.docx');
        $templateProcessor->saveAs(storage_path('app/public/documentos/') . $filename. '_' . $id . '.docx');
        $rendererName = Settings::PDF_RENDERER_DOMPDF;
        $rendererLibraryPath = realpath(base_path('vendor') . '/dompdf/dompdf');
        if(!Settings::setPdfRenderer($rendererName, $rendererLibraryPath)){
           dd($rendererLibraryPath);
        }
        $temp = IOFactory::load(storage_path('app/public/documentos/') . $filename . '_' . $id . '.docx');
        $xmlWriter = IOFactory::createWriter($temp , 'PDF');
        $xmlWriter->save(storage_path('app/public/documentos/' . $filename . '_' . $id . '.pdf'), TRUE);
        return true;   
        
    }
}
