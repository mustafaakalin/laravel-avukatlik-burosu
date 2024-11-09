<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Services\TelegramService;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //


    protected $telegram;
    public function __construct(TelegramService $telegram)
    {
        $this->telegram = $telegram;
    }


    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'message' => 'required|string'
        ]);


        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();


        // Telegrama bildirim gönder
        $chat_id = env('TELEGRAM_CHAT_ID'); // Telegram kanal yada grup chat id'si
        $message = "Yeni İletişim Formu Gönderildi. \n\nAd: " . $data['name'] . "\nE-posta: " . $data['email'] . "\nMesaj: " . $data['message'] . "\n#iletişimformu";
        $this->telegram->sendMessage($message);




        // Send email here Mail gönderim kısmını buraya ekle
        // Mail::send('emails.contact', $data, function ($message) use ($data) {
        //     $message->from($data['email'], $data['name']);
        //     $message->to('info@avukatlikburosu.com')->subject('Yeni Mesaj');
        // });

        // Alternatif olarak, Laravel's built-in Mail facade'ı kullanılabilir
        // Bu yöntem daha güvenli ve okunur bir şekilde mail gönderimini sağlar
        Mail::send([],[], function ($message) use ($data) {
            $message->to($data['email'])->subject('Yeni İletişim mesajı')->html('Ad: ' . $data['name'] . '<br>'. 'E-posta: ' . $data['email'] . '<br>' . 'Mesaj: ' . $data['message'] , 'text/html');

        });

        return redirect('/contact')->with('success', 'Mesajınız İletilmiştir.');

        // Laravel's built-in Mail facade'ı kullanılmasının alternatif bir yöntemi,

        //Mail::to('info@avukatlikburosu.com')->send(new ContactFormMail($request->all()));

    }
}
