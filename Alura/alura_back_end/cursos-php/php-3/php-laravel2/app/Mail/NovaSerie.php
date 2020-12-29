<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovaSerie extends Mailable
{
    use Queueable, SerializesModels;

    public string $nome;
    public string $qtdTemp;
    public string $qtdEps;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $qtdTemp, $qtdEps)
    {
        $this->nome = $nome;
        $this->qtdTemp = $qtdTemp;
        $this->qtdEps = $qtdEps;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.serie.novaSerie');
    }
}
