<?php

namespace App\Http\Controllers;

use App\Services\Email\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function home()
    {
        $events = DB::table('events')->orderBy('id', 'desc')->get();
        $last_event = DB::table('events')->orderBy('id', 'desc')->first();

        return view('home.home', compact('events', 'last_event'));
    }

    public function achievements_details($reference_company)
    {

        $achievements = DB::table('achievements')->where('reference_company', $reference_company)->get();
        $achievement = DB::table('achievements')->where('reference_company', $reference_company)->first();
        $company = $achievement->company;

        return view('home.achievements_details', compact('achievements', 'company', 'reference_company'));
    }

    public function achievements()
    {
        return view('home.achievements');
    }

    public function about_us()
    {
        return view('home.about_us');
    }

    public function services()
    {
        return view('home.services');
    }

    public function privacyPolicy()
    {
        return view('home.privacy_policy');
    }

    public function sendMessage()
    {
        $name = $this->request->input('name');
        $phone_number = $this->request->input('phone_number');
        $email_addr = $this->request->input('email_addr');
        $message_text = $this->request->input('message_text');
        $subject = $this->request->input('subject');

        $mail = new Email;
        $send = $mail->sendContactMessage($name, $email_addr, $phone_number, $message_text, $subject);

        //dd($send);

        if($send == true) {
            return response()->json([
                'code' => 200,
                'status' => "success",
                'contact' => $this->request->all(),
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'status' => "error",
                'contact' => $this->request->all(),
            ]);
        }
    }
}
