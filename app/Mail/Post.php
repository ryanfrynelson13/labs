<?php

namespace App\Mail;

use App\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;


class Post extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $titre;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Article $article,User $user)
    {
        
        $this->titre = $article->titre;
        $this->name = $user->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.post');
                    
    }
}
