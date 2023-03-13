<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    /**
     * Create a new message instance.
     *  @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * function build  cambiar el asunto y cambiar el emisor necesitamos diferentes emisores
     * según el motivo del mensaje lo cambiamos mediante ejecución para eso utilizamos el from
     * y elegimos quien va hacer el emisor en este ejm se coloca el mismo pero en el archivo env
     * podemos configurar mail from mail para el cargue de arhivos attachFromStorage para utilizar el sistema
     * de archivos de Laravel el storage
     */
    public function build(){
        return $this->view('email')->from("prueba151527@outlook.com")->subject(
            "Envio de prueba")->attachFromStorage('fakepdf.pdf','pdffalso.pdf');
    }

}
