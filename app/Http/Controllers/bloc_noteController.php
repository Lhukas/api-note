<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bloc_note;
use App\Models\note;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;



class bloc_noteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBlocNote = bloc_note::all()->toArray();
        return view('home', ['listBlocNote' => $listBlocNote ] );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBlocNote');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $bloc_note = new bloc_note([
        'name_bloc_note' => $request->get('nameBlocNote'),
        'modification_bloc_note' => isset($_POST['modif']) ? "false" : "true",
    ]);
    $bloc_note->save();

    
    $CountData = 0;

    foreach ($request->all() as $data) {

    if($CountData>1){
        $note = new note([
            'id_bloc_note' => $bloc_note->id,
            'texte_note' => $data,
        ]);
        $note->save();

    }
    $CountData++;
  }
    return redirect('/')->with('success', 'Nouveau bloc note crée avec succès');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bloc_note = bloc_note::findOrFailOrFail($id)->toArray();

        $note = note::where('id_bloc_note','=', $id)->get()->toArray();

        return view('notes', 
        [ 
            'blocNote' => $bloc_note,
            'note' => $note,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = note::where('id_bloc_note','=', $id)->get();

        foreach($note as $note2){
            $note2->delete();
        }

        $bloc_note = bloc_note::findOrFail($id);
        $bloc_note->delete();

        

        return redirect('/')->with('success', 'Liste supprimée avec succes');
    }


    public function pdf($id)
    {


        $bloc_note = bloc_note::findOrFail($id)->toArray();

        $note = note::where('id_bloc_note','=', $id)->get()->toArray();


        $data = [
            'bloc_note' => $bloc_note,
            'note' => $note
        ];
          



        $pdf = PDF::loadView('bloc_note_pdf', $data);

        return $pdf->download($bloc_note['name_bloc_note'].'.pdf');

    }

    public function sendEmail(Request $request, $id)
    {

        $bloc_note = bloc_note::findOrFail($id)->toArray();

        $note = note::where('id_bloc_note','=', $id)->get()->toArray();


        $data = [
            'bloc_note' => $bloc_note,
            'note' => $note
        ];
          
        $emailToSend = $request->get('mailToSend');


        $pdf = PDF::loadView('bloc_note_pdf', $data);



        $mailData = [
            "title" => "Reussite",
            "name" => "lhukasboss",
            "dob" => "12/12/1990",
        ];
    
        Mail::send('emailSend', $mailData, function($message)use($bloc_note, $pdf, $request) {
            $message->to($request->get('mailToSend'))
                    ->subject("Liste par mail")
                    ->attachData($pdf->output(), $bloc_note['name_bloc_note'].".pdf");
        });




       return redirect('/')->with('success', 'mail envoyé avec succes');
    


    }
}

