<?php

namespace Shuramita\Marketing\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $style;
    public $title;
    public $images;

    public $links;

    public function __construct()
    {
        $resource = new MailResource();
        $this->style = file_get_contents(public_path().'/vendor/marketing/marketing.css');
        $this->title = 'Welcome to Averspace';
        $resource->addGA('?utm_source=email&utm_medium=welcome&utm_campaign=marketing');
        $this->images = $resource->images;
        $this->links = $resource->links;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('marketing::emails.welcome')
                    ->with([
                        'style' => $this->style,
                        'title' => $this->title,
                        'images' =>$this->images,
                        'links'=>$this->links
                    ]);
    }
}
