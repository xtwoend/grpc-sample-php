<?php

namespace App;

use Google\Protobuf\Internal\Message;
use Service\Math\AddReply;
use Service\Math\AddRequest;
use Service\Math\CalculatorInterface;
use Service\Math\SubtractReply;
use Service\Math\SubtractRequest;

class CalculatorClient implements CalculatorInterface
{
    public function add(AddRequest $request): AddReply
    {
      $reply = new AddReply();
      $reply->mergeFromString($this->makeRequest($request, 'add'));

      return $reply;
    }

    public function subtract(SubtractRequest $request): SubtractReply
    {
      $reply = new SubtractReply();
      $reply->mergeFromString($this->makeRequest($request, 'subtract'));

      return $reply;
    }

    private function makeRequest(Message $message, string $method): string
    {
      $body = $message->serializeToString();
      $ch = curl_init("http://localhost:8000/{$method}");

      curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $body,
      ]);

      $response = curl_exec($ch);

      curl_close($ch);

      return $response;
    }
}