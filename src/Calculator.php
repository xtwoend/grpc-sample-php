<?php

namespace App;

use Service\Math\AddReply;
use Service\Math\AddRequest;
use Service\Math\CalculatorInterface;
use Service\Math\SubtractReply;
use Service\Math\SubtractRequest;

class Calculator implements CalculatorInterface
{
    public function add(AddRequest $request): AddReply
    {
      $sum = $request->getX() + $request->getY();

      return (new AddReply())->setSum($sum);
    }

    public function subtract(SubtractRequest $request): SubtractReply
    {
      $diff = $request->getX() - $request->getY();

      return (new SubtractReply())->setDiff($diff);
    }
}