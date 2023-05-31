<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OTP extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content, $detail)
    {
        $this->content = $content;
        $this->detail = $detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        $this->replaceContent();
        return $this->from(
            $address = env("MAIL_FROM_ADDRESS"),
            $name = $this->detail["app_name"]
        )
            ->subject("User Verification")
            ->view("admin/mail/userVerificationMail")
            ->with([
                "content" => $this->content,
            ]);
    }
    public function replaceContent()
    {
        $data = ["{{User_name}}", "{{OTP}}", "{{App_name}}"];
        $this->content = str_replace($data, $this->detail, $this->content);
    }
}
