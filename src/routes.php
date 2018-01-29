<?php



Route::group(['namespace' => 'Shuramita\Marketing\Controllers'], function()
{

    Route::get('marketing/email/welcome',['as' =>'shura_marketing_email_welcome','uses'=>function(){
        $body =  (new Shuramita\Marketing\Mail\Welcome())->render();
        $cssToInlineStyles = new TijsVerkoyen\CssToInlineStyles\CssToInlineStyles();
        $inlineBody = $cssToInlineStyles->convert($body);

        // export to backend folder


        $templateFolder = 'D:\\node\\developer-averspace\\emailTemplate\\';
        $templateName = 'Email_Welcome.html';
        file_put_contents($templateFolder.$templateName,$inlineBody);
        shell_exec('node D:\\node\\developer-averspace\\test\\email\\welcome.js');
        echo $inlineBody;
    }] );
});

