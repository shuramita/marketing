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
        $this->style = file_get_contents(public_path().'/vendor/marketing/marketing.css');
        $this->title = 'Welcome to Averspace';
        $this->images = new \stdClass();
//        $this->images->logo = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/averspace-logo.png'));
//        $this->images->header = 'data:image/jpg;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/averspace-header-background.jpg'));
//        $this->images->icon_office_block = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/301-office-block.png'));
//        $this->images->icon_contract = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/301-contract.png'));
//        $this->images->icon_credit_card = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/301-credit-card-1.png'));
//        $this->images->icon_search = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/301-search.png'));
//        $this->images->icon_facebook ='data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/facebook.png'));

        $this->images->logo = 'https://lh3.googleusercontent.com/Y3hNr2PVZGpJVEmXVqvsNI0xII_vvccf6i52WOXBpwnUx2J0uvBgtE5lEQ-ADwek0-mEBv2WcGIBfgZ5hNxg0gWX5vDI_yuxVdfc=w172-h40-rw';
        $this->images->header = 'https://lh3.googleusercontent.com/athJNAnbSKudOs61wl-B7NVjP0KPC6EgnnS6etci1TH7HtMQeRgBxw6apk0kBbLZKCU-1hE5ERr2rUnG0kIXETXwHpdp9IaYa40d=w600-h250-rw-no';
        $this->images->icon_office_block = 'https://lh3.googleusercontent.com/bjRvviqu3dZcusgRbk94WH9DvqLJOyXG0k0kjv4lInuJY9xCBHPpOBfr7DXiAasi8nEXXPJE74Chz0vr5gUpPsMQwMvpMp4b6pyx=w40-h33-rw';
        $this->images->icon_contract = 'https://lh3.googleusercontent.com/y9bL_Au3FUHjsGwOyGtfVL5EbZHxsjf1NnluW7EMBGW-EJ_PoDZzxhJ2UuPh09BxCCJFqPYw5jOnZypbhAWXvSoONvCi-tJYuz9b=w40-h41-rw';
        $this->images->icon_credit_card = 'https://lh3.googleusercontent.com/GsiBwaRoySc6NO4ddAEZDb3ss2bjtk9n3YMb-ACuTwk-tOq_5uaerQVFUSIzLxApbSacZFOGiod2dBbsCRaWI_OLDn30D885gQnn=s40-rw';
        $this->images->icon_search = 'https://lh3.googleusercontent.com/5X2kaULl6lUwPbKjj8l4XLuOW7IXggyGDNRLZOSjff0fIbsgtoqHtoUV997xNeY7_68bVVaZKUFTZ4ArBWEEWf_ro2USRLusdMEC=w32-h40-rw';
        $this->images->icon_facebook ='https://lh3.googleusercontent.com/lf7NWKnaqaITbKmi4IRaANS08_1zMySUZzxznn7F7U7638xwXHPwxgqNSAcbzXDfyCnuVqZyvY6elw=s24-rw-no';
        $this->links = new \stdClass();
        $ga = '?utm_source=email&utm_medium=welcome&utm_campaign=marketing';

        $this->links->home = 'http://averspace.com'.$ga;
        $this->links->digital = 'https://averspace.com/resources/faqs/digital-contract-signing'.$ga;
        $this->links->survey = 'https://averspace.com/dc/survey/profile'.$ga;
        $this->links->listing = 'https://averspace.com/list-property-free-on-averspace-singapore'.$ga;
        $this->links->payment = 'https://averspace.com/electronic-payment-of-rental-contract'.$ga;

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
