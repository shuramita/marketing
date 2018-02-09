<?php

namespace Shuramita\Marketing\Mail;


class MailResource
{
    public $images;
    public $links;
    public $ga = '?utm_source=email&utm_medium=welcome&utm_campaign=marketing';
    public function __construct()
    {


//        $this->images->logo = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/averspace-logo.png'));
//        $this->images->header = 'data:image/jpg;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/averspace-header-background.jpg'));
//        $this->images->icon_office_block = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/301-office-block.png'));
//        $this->images->icon_contract = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/301-contract.png'));
//        $this->images->icon_credit_card = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/301-credit-card-1.png'));
//        $this->images->icon_search = 'data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/301-search.png'));
//        $this->images->icon_facebook ='data:image/png;base64,' . base64_encode(file_get_contents(public_path().'/vendor/marketing/images/facebook.png'));

        $this->images = new \stdClass();
        $this->images->logo = 'https://lh3.googleusercontent.com/rh2nDim1sok7Tb_EMxWgQfw0JMxiBN6rkX8y2383X_zxgo3bWkgCBAbiCKw_SXFaRg2Eh5czi-SoTD9xMjy9hF6-3QEWplEUnrLr=w172-h40-no';
        $this->images->header = 'https://lh3.googleusercontent.com/athJNAnbSKudOs61wl-B7NVjP0KPC6EgnnS6etci1TH7HtMQeRgBxw6apk0kBbLZKCU-1hE5ERr2rUnG0kIXETXwHpdp9IaYa40d=w600-h250-no';

        $this->images->icon_office_block = 'https://lh3.googleusercontent.com/A5pK786fveGkmHMzgs_lOXFpBTpfl1FwB6Eem4Iiw9Y9FmMb-TDgdNP6w6fL3rHiYVykZXGZSrmdW3y53_d6WPiQohtd6NTSe9g0=w40-h33-no';
        $this->images->icon_contract = 'https://lh3.googleusercontent.com/EQk3Y0MiTrX3c-TDk3unFEENQw_Qz17nWkOFqKhlr8PhnCoHl5qM7bYgDACFpOcJDoaDK2VHtjjpR9RngiVBR4m4zLeprl-HhxTo=w40-h41-no';
        $this->images->icon_credit_card = 'https://lh3.googleusercontent.com/GQgmpN5OTJQFs8DbU72nCBGgXRAfhvXfZOEGQGyWxfCVc5yD2yvfgyNb4ji35c5BAjV-v3ak7PLvFRzcUGaqv4NWF3c5Vlm0Xunn=s40-no';
        $this->images->icon_search = 'https://lh3.googleusercontent.com/feyfTW6BijUoqnfJ-7BCJ8hBnpJ-17-4w4eERi4C0lLD58U5bR8lMtounVm0bJwFWBNQY7-rzi3syjb41YzvDxOOc3RZASbqRjsd=w32-h40-no';
        $this->images->icon_facebook ='https://lh3.googleusercontent.com/lf7NWKnaqaITbKmi4IRaANS08_1zMySUZzxznn7F7U7638xwXHPwxgqNSAcbzXDfyCnuVqZyvY6elw=s24-no';
        $this->images->icon_tweeter ='https://lh3.googleusercontent.com/bscpOy1eOOoafRzn7zyAqPhl67gutgJa4b1zcrO1W0g-1V6oALsKlwd0vcduLIKgn1_IEIRvTDfI0w=s24-no';
        $this->images->download_ios = 'https://lh3.googleusercontent.com/aX7ucpVJ_LhRwpjn8hHaARGlcoYB8wtryVvMppNop7B2sSx7lC30ZtbpvuLFd8ZLBhqJVGw-TzQhQA=w140-h41-no';
        $this->links = new \stdClass();
//        $ga = '?utm_source=email&utm_medium=welcome&utm_campaign=marketing';
        $this->addGA($this->ga);
    }
    public function addGA($ga){
        $this->ga = $ga;
        $this->links->home = 'http://averspace.com'.$this->ga;
        $this->links->digital = 'https://averspace.com/resources/faqs/digital-contract-signing'.$this->ga;
        $this->links->survey = 'https://averspace.com/dc/survey/profile'.$this->ga;
        $this->links->listing = 'https://averspace.com/list-property-free-on-averspace-singapore'.$this->ga;
        $this->links->payment = 'https://averspace.com/electronic-payment-of-rental-contract'.$this->ga;
        $this->links->facebook = 'https://www.facebook.com/averspace/';
        $this->links->tweeter = 'https://twitter.com/Averspaceman';
        $this->links->feedback = 'https://averspace.com/contact'.$this->ga;
        $this->links->download_ios = 'https://itunes.apple.com/app/id1086451552'.$this->ga;

    }
    public function build(){

    }
}