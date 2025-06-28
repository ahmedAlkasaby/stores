<?php
namespace App\Services;

use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging;
use Kreait\Firebase\Factory;

class FirebaseNotificationService
{
    protected $messaging;

    public function __construct(string $projectId)
    {
        $service_account_path =  base_path(env('FIREBASE_CREDENTIALS'));

        $factory = (new Factory)->withServiceAccount($service_account_path)->withProjectId($projectId);
        $this->messaging = $factory->createMessaging();
    }

    public function sendNotification($token, $title, $body, $data = [])
    {
        $message = CloudMessage::withTarget('token', $token)
            ->withNotification([
                'title' => $title,
                'body'  => $body,
            ])
            ->withData($data);

        return $this->messaging->send($message);
    }
}
