<?php

namespace Shuramita\Marketing\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeBack extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $resource = new MailResource();
        $this->style = file_get_contents(public_path().'/vendor/marketing/marketing.css');
        $this->title = 'Welcome back to Averspace';
        $this->ga = '?utm_source=email&utm_medium=welcome-back&utm_campaign=marketing';
        $resource->addGA($this->ga);
        $this->images = $resource->images;
        $this->links = $resource->links;
        $this->property = new \stdClass();
//        $this->property->link = 'https://averspace.com/621-ang-mo-kio-avenue-9/5a6eb7e75777794c1cee1a29';
//        $this->property->thumb = 'https://avp.blob.core.windows.net/post-thumbnail/755a49d38af33ab9f7b8d13733c8297f';
//        $this->property->title = '621 Ang Mo Kio Avenue 9';
//        $this->property->type = 'HDB';
//        $this->property->bed = '3 BEDs';
//        $this->property->bath = '3 BATHs';
//        $this->property->size = '1,238 sqft';
//        $this->property->price = '$S 610,220';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('marketing::emails.welcome-back')
            ->with([
                'style' => $this->style,
                'title' => $this->title,
                'images' =>$this->images,
                'links'=>$this->links,
                'property'=>$this->property,
                'ga'=>$this->ga
            ]);
    }
}
