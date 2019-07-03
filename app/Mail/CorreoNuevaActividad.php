<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CorreoNuevaActividad extends Mailable
{
    use Queueable, SerializesModels;

    private $direccion;
    private $fecha;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($direccion,$fecha)
    {
        $this->direccion = $direccion;
        $this->$fecha = $fecha;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $direccion = strval($this->direccion);
      $fecha = strval($this->fecha);
      return $this->view('mail.correoNuevaActividad', compact('fecha'))->to($direccion)->subject('Nueva actividad');

    }
}
