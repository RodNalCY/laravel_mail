<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class GoMailController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

    public function enviarEmail(Request $request){

        if($request->ajax()) {

            if($request['data']['email']){
                //return response()->json($request['data']['email']);
                $mail_usuario = $request['data']['email'];
                $subject ="Envio de Email";
                $for = $mail_usuario;
                $data = array('name'=> 'Rodnal Cabello' , 'email_from' => 'sistemastiresoft@lab-elsol.com', 'name_from' => 'Julio Vela', 'url_link'=> "https://miro.medium.com/max/800/1*E3v7azePLUppA9_iELu1yQchrome.1.69i57j35i39j0l4j0i433j0i10.6554j1j7&sourceid=chrome&ie=UTF-8");

                Mail::send('emails.email', $data, function($msj) use($subject, $for){
                    $msj->from('sistemastiresoft@lab-elsol.com',"SISTEMAS TELETRABAJO");
                    $msj->subject($subject);
                    $msj->to($for);
                });

                return response()->json(['resultado'=>'success']);
            }else{
                return response()->json(['resultado'=>'error']);
            }
        }
    }
}
