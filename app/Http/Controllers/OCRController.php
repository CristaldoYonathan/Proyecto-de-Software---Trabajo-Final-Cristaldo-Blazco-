<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OCRController extends Controller
{
    public function ocr()
    {

        return view('ocr');
    }

    public function upload(Request $request)
    {

//        if($request->hasFile('image')){
//            $imagenes = $request->file('image')->store('public/ocr');
//            $url = Storage::url($imagenes);
//
//            echo "<h3>Image Upload Success</h3>";
//            echo '<img src="'.$url.'" width="300" height="200" class="img-thumbnail" />';
//
//            shell_exec('"G:\\Tesseract-OCR\\tesseract" "G:\\Elementos_Tp_final\\laragon\\www\\Easy_Rent\\public\\'.$url.'" out');
//
//            echo "<br><h3>OCR after reading</h3><br><pre>";
////
//            $myfile = fopen("out.txt", "r") or die("Unable to open file!");
//            echo fread($myfile,filesize("out.txt"));
//            fclose($myfile);
//            echo "</pre>";
//        }


        $pdfText = $statusMsg = '';
        $status = 'error';
        // If form is submitted
        if ($request->hasFile('pdf_file')) {
            //Si el archivo esta seleccionado

            if ($request->file('pdf_file')->isValid()) {
                //Si el archivo es valido
                try {
                    // Get file
                    $file = $request->file('pdf_file');
                    // Make sure it's a PDF file
                    if ($file->getClientOriginalExtension() != 'pdf') {
                        $statusMsg = 'Solo se permiten archivos PDF.';
                    } else {
                        // Upload file
                        $filePath = $file->store('public/ocr');
                        // Parse text from PDF file and store it to $pdfText variable
                        $pdfText = $this->parsePdfText($filePath);
                        $status = 'success';
                        $statusMsg = 'Archivo subido y leido correctamente.';
                    }
                } catch (\Exception $e) {
                    $statusMsg = $e->getMessage();
                }
            } else {
                $statusMsg = 'Archivo invalido, intente nuevamente.';
            }
        }

        return view('ocr', ['status' => $status, 'statusMsg' => $statusMsg, 'pdfText' => $pdfText]);

//        return view('ocr', ['status' => $status, 'statusMsg' => $statusMsg, 'pdfText' => $pdfText]);
    }
}
