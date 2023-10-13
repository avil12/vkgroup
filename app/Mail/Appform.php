<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class Appform extends Mailable
{
    use Queueable, SerializesModels;

    public $validatedData;
    public $passportPhotoPath;
    public $validDocumentPath;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($validatedData, $passportPhotoPath, $validDocumentPath)
{
    $this->validatedData = $validatedData;
    $this->passportPhotoPath = $passportPhotoPath;
    $this->validDocumentPath = $validDocumentPath;
}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        // return $this->view('view.name');

   return $this->markdown('emails.recieveform')->subject(config('app.name'). 'Big Win Application Form')
   ->attach(storage_path("app/public/{$this->passportPhotoPath}"), [
        'as' => 'passportphoto.jpg',
        'mime' => 'image/jpeg',
    ])
    ->attach(storage_path("app/public/{$this->passportPhotoPath}"), [
        'as' => 'passportphoto.png',
        'mime' => 'image/png',
    ])
    ->attach(storage_path("app/public/{$this->passportPhotoPath}"), [
        'as' => 'passportphoto.gif',
        'mime' => 'image/gif',
    ])
    ->attach(storage_path("app/public/{$this->validDocumentPath}"), [
        'as' => 'validdocument.docx',
        'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    ])
    ->attach(storage_path("app/public/{$this->validDocumentPath}"), [
        'as' => 'validdocument.pdf',
        'mime' => 'application/pdf',
    ]);


    }
}
