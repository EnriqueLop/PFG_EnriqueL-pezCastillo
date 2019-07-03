<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CorreoNuevoDirector extends Mailable
{
    use Queueable, SerializesModels;

    private $codigo;
    private $direccion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($codigo, $direccion)
    {
        $this->codigo = $codigo;
        $this->direccion = $direccion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $codigo = $this->codigo;
      $direccion = strval($this->direccion);

        return $this->view('mail.correoNuevoDirector',compact('codigo'))->to($direccion);
    }
}
