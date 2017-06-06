<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\empreses;
use App\provincies;
use App\poblacions;
use App\sectors;
use App\idiomes;
use App\ofertes;
use App\skills;
use App\estudis;
use App\alumnes;
use App\ofertaalumnes;
use App\Classes\fpdf;
use DB;

class MatchingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::check() && empreses::where('idUser', Auth::user()->id)->exists())
        {
            $empresa = empreses::where('idUser', Auth::user()->id)->first(); 
            
            $provincias = provincies::orderBy('provincia', 'asc')->get();
            $poblaciones = poblacions::where('idProvincia', '=', $empresa->idProvincia)->orderBy('poblacio', 'asc')->get();

            $sectores = sectors::whereNotIn('id', $empresa->sectors->pluck('id')->toArray(), 'or')->get();
            $idiomas = idiomes::all();
            $skills = skills::all();
            
            $estudis = estudis::all();
            
            $request->session()->has('tab') ? $tabName = $request->session()->get('tab') : $tabName = 'empresa';
            
            return view('empresa.index', compact('empresa', 'provincias', 'poblaciones', 'sectores', 'tabName', 'idiomas', 'skills', 'estudis'));
        }
        return redirect('home');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function matching($id = 26)
    {
        $id = 26;
        $oferta = ofertes::findOrFail($id);

        $alumnos = alumnes::where('activo', 1)->where('consentimientoDatos', 1)
                    ->whereNotIn('id', $oferta->alumnes->pluck('id')->toArray())
                    ->where(function($query) use($oferta) {
                        $query->whereHas('skill', function($query) use($oferta){
                            $query->whereIn('skills.id', $oferta->skills->pluck('id')->toArray());
                        })
                        ->orWhereHas('estudis', function($query) use($oferta){
                            $query->whereIn('estudis.id', $oferta->estudis->pluck('id')->toArray());
                        })
                        ->orWhereHas('idiomas', function($query) use($oferta){
                            $query->whereIn('idiomes.id', $oferta->idiomes->pluck('id')->toArray());
                        });  
                    })->get();

        foreach($alumnos as $alumno){
            $alumno->percentages = $this->percentageAlumno($alumno, $oferta);
        }
        $alumnos = $alumnos->sortByDesc('percentages.percentageTotal');
        //dd($alumnos);
        return view('scaffold-interface.ofertas.viewoferta', compact('alumnos', 'oferta'));
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function percentageAlumno($alumno, $oferta)
    {
        $pSkills = 1/3;
        $pEstudis = 1/3;
        $pIdiomes = 1/3;
        
        $percentageSkills = 0;
        $percentageEstudis = 0;
        $percentageIdiomes = 0;
        foreach($alumno->skill as $skill){
            if(in_array($skill->id, $oferta->skills->pluck('id')->toArray())){
                $percentageSkills++;
            }
        }
        foreach($alumno->estudis as $estudi){
            if(in_array($estudi->id, $oferta->estudis->pluck('id')->toArray())){
                $percentageEstudis++;
            }
        }
        foreach($alumno->idiomas as $idioma){
            if(in_array($idioma->id, $oferta->idiomes->pluck('id')->toArray())){
                $percentageIdiomes++;
            }
        }
        
        $array = array('percentageSkills' => round(($percentageSkills * 100)/count($oferta->skills->pluck('id')->toArray())),
                      'percentageEstudis' => round(($percentageEstudis * 100)/count($oferta->estudis->pluck('id')->toArray())),
                      'percentageIdiomes' => round(($percentageIdiomes * 100)/count($oferta->idiomes->pluck('id')->toArray())));

        $array['percentageTotal'] = (round(($array['percentageSkills'] * $pSkills) + ($array['percentageEstudis'] * $pEstudis) + ($array['percentageIdiomes'] * $pIdiomes)));
        
        return $array;
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        $alumnos = alumnes::whereIn('id', $request->alumnos)->get();
        
        /*$to = 'danirocar@hotmail.com.com';
        $subject = "Nous Alumnes";

        $htmlContent = '
            <html>
            <head>
                <title>Nous Alumnes en Práctiques</title>
            </head>
            <body>
                <h1>Nous Alumnes</h1>
                <p>Buen dia señor, le adjunto los alumnos perfectos para su oferta de trabajo.</p>
            </body>
            </html>';

        // Set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers
        $headers .= 'From: BTDR<no-respoder@btdr.com>' . "\r\n";

        // Send email
        try{
            if(mail($to,$subject,$htmlContent,$headers)){
                //$successMsg = 'Email has sent successfully.';
                //return redirect('contacto')->with('success', true)->with('message', "S'ha enviat correctament");
                return redirect()->back();
            }
        } catch (Exception $e) {
            return redirect('contacto')->with('success', true)->with('message', "No s'ha enviat correctament");
        }*/
        $oferta = ofertes::findOrFail($request->oferta);
        foreach($alumnos as $alumno){
            //array_push($caca, $alumno->id);
            //$oferta->alumnes()->attach('idAlumno', $alumno->id);   
            $o = new ofertaalumnes;
            $o->idOferta = $request->oferta;
            $o->idAlumno = $alumno->id;
            
            $o->save();
        }
        
        return response()->json($oferta);
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPDF(Request $request)
    {
        $pdf = new fpdf('P', 'pt', array(500,233));
        //$pdf->AddFont('Georgiai','','georgiai.php');
        $pdf->AddPage();
        //$pdf->Image('lib/fpdf/image.jpg',0,0,500);
        //$pdf->SetFont('georgiai','',16);
        $pdf->Cell(40,10,'Hello World!');

        // email stuff (change data below)
        $to = "danirocar@hotmail.com"; 
        $from = "me@example.com"; 
        $subject = "send email with pdf attachment"; 
        $message = "<p>Please see the attachment.</p>";

        // a random hash will be necessary to send mixed content
        $separator = md5(time());

        // carriage return type (we use a PHP end of line constant)
        $eol = PHP_EOL;

        // attachment name
        $filename = "test.pdf";

        // encode data (puts attachment in proper format)
        $pdfdoc = $pdf->Output("", "S");
        $attachment = chunk_split(base64_encode($pdfdoc));

        // main header
        $headers  = "From: ".$from.$eol;
        $headers .= "MIME-Version: 1.0".$eol; 
        $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

        // no more headers after this, we start the body! //

        $body = "--".$separator.$eol;
        $body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
        $body .= "This is a MIME encoded message.".$eol;

        // message
        $body .= "--".$separator.$eol;
        $body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
        $body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
        $body .= $message.$eol;

        // attachment
        $body .= "--".$separator.$eol;
        $body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
        $body .= "Content-Transfer-Encoding: base64".$eol;
        $body .= "Content-Disposition: attachment".$eol.$eol;
        $body .= $attachment.$eol;
        $body .= "--".$separator."--";

        // send message
        mail($to, $subject, $body, $headers);
        
        return response()->json($request);
    }
}
