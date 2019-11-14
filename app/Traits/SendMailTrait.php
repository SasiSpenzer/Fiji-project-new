<?php
namespace App\Traits;


use Illuminate\Support\Facades\Mail;

trait SendMailTrait {

    public function SendMail($toAddress,$template,$title,$subject,$link = null,$body = null,$calenders = null){


        $data['toAddress'] = $toAddress;
        $data['template'] = $template;
        $data['title'] = $title;
        $data['subject'] = $subject;
        $data['link'] = $link;
        $data['body'] = $body;
        $data['calenders'] = $calenders;

//        print_r($data['link']); exit();


        Mail::send($data['template'], $data, function($message)  use ($data) {
            $message->to($data['toAddress'], $data['toAddress'])
                ->subject($data['subject']);
            $message->attachData("signature.png", 'Signature', [
                'mime' => 'text/calendar;charset=UTF-8;method=REQUEST',
            ]);
        });

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        }else{
            return response()->json('Great! Successfully send in your mail');
        }
    }

}