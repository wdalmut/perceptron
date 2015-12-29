<?php
namespace P;

class Perceptron
{
    const LEARNING_CONSTANT = 0.01;
    private $weights;

    public function __construct(...$weights)
    {
        $this->weights = $weights;
    }

    public function feedForward(...$inputs)
    {
        $sum = 0;
        for ($i=0; $i<count($this->weights); $i++) {
            $sum += ($inputs[$i] * $this->weights[$i]);
        }

        return $this->activate($sum);
    }

    public function train($desired, ...$inputs)
    {
        $guess = call_user_func_array([$this, "feedForward"], $inputs);
        $error = $desired - $guess;

        for ($i=0; $i<count($this->weights); $i++) {
            $this->weights[$i] += self::LEARNING_CONSTANT * $error * $inputs[$i];
        }
    }

    private function activate($sum)
    {
        if ($sum > 0) {
            return 1;
        } else {
            return -1;
        }
    }
}
