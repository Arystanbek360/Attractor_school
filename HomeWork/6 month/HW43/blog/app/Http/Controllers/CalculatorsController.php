<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * @package App\Http\Controllers
 */
class CalculatorsController extends Controller
{
    /**
     * @return View|Application
     */
    public function getNumber(): View|Application
    {
        return view('Calculators.getNumber');
    }

    public function calculate(Request $request)
    {
        $firstNumber = $request->input('first');
        $secondNumber = $request->input('second');
        switch ($request->input('radio')) {
            case ('add'):
                $radio = " + ";
                $result = " = ";
                $result .= $firstNumber + $secondNumber;
                break;
            case ('subtract'):
                $radio = " - ";
                $result = " = ";
                $result .= $firstNumber - $secondNumber;
                break;
            case ('multiply'):
                $radio = " * ";
                $result = " = ";
                $result .= $firstNumber * $secondNumber;
                break;
            case ('divide'):
                $radio = " : ";
                $result = " = ";
                $result .= $firstNumber / $secondNumber;
                break;
            default:
                $firstNumber = $secondNumber = $result = "";
                $radio = "You must be check radio button!";
                break;
        }
        return view('Calculators.result', compact('firstNumber', 'secondNumber', 'radio', 'result'));
    }
}
