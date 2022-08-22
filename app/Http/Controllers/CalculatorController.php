<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
   public function calculator(Request $request)
   {
        $firstNumber = $request->input('firstNumber');
        $secondNumber = $request->input('secondNumber');
        $operator = $request->input('operator');
        $result = 0;
        if($operator == '+'){
            $result = $firstNumber + $secondNumber;
        }elseif($operator == '-'){
            $result = $firstNumber - $secondNumber;
        }elseif($operator == '*'){
            $result = $firstNumber * $secondNumber;
        }elseif($operator == '/'){
            $result = $firstNumber / $secondNumber;
        }elseif($operator == '%'){
            $result = $firstNumber % $secondNumber;
        }else{
            $result = 0;
        }
        return redirect('/')->with('message','Your answer is ' .$result);
   }
}
