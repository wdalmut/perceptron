<?php
namespace P;

class Trainer
{
    public function train(Perceptron $p)
    {
        for ($i=-10000; $i<10000; $i++) {
            $x = rand(-100000, 100000);
            $y = rand(-100000, 100000);

            $answer = 1;
            if ($y < $this->f($x)) {
                $answer = -1;
            }

            $p->train($answer, $x, $y, 1);
        }
    }

    private function f($x)
    {
        return (2*$x + 3);
    }
}
