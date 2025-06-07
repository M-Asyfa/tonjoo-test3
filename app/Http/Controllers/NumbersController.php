<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumbersController extends Controller
{
    // Get Fibonacci number at position $n
    public function fibonacci($n)
    {
        $fib = [];

        for ($i = 0; $i <= $n; $i++) {
            if ($i == 0) {
                $fib[$i] = 0;
            } elseif ($i == 1) {
                $fib[$i] = 1;
            } else {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            }
        }

        return $fib[$n];
    }

    // Return result view with sum of Fibonacci(n1) + Fibonacci(n2)
    public function fibonacciProduct($n1, $n2)
    {
        $fb1 = $this->fibonacci($n1);
        $fb2 = $this->fibonacci($n2);
        $sum = $fb1 + $fb2;

        return view('result', compact('n1', 'n2', 'fb1', 'fb2', 'sum'));
    }

    // Optional: input form
    public function form()
    {
        return view('form');
    }
}
