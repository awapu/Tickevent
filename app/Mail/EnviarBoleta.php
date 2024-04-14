<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;
//iMPORTA QR 
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EnviarBoleta extends Mailable
{
    use Queueable, SerializesModels;
    
    //VARIABLES QUE RECIBO
    public $qr;
    public $qr1;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($qr)
    {
        //

        $this->qr = $qr;
        $this->qr1 = QrCode::size(300)
        ->backgroundColor(255,90,0)
        ->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8');

        
       


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('compraticket.envioBoleta');
    }
}
