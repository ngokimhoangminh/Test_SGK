<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content1;
    public $content2;
    public $content3;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $content1, string $content2, string $content3)
    {
        //
        $this->content1 = $content1;
        $this->content2 = $content2;
        $this->content3 = $content3;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->from('k.hoshi.olive@gmail.com') // 送信元
        ->subject('テストメール') // メールタイトル
        ->view('emails.contact') // どのテンプレートを呼び出すか
        ->with([
            'content1' => $this->content1,
            'content2' => $this->content2,
            'content3' => $this->content3,
        ]); // withオプションでセットしたデータをテンプレートへ受け渡す
    }
}
