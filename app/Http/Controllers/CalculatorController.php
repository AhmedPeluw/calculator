<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OperationService;

class CalculatorController extends Controller
{
    protected $calculatorService;

    public function __construct(OperationService $calculatorService)
    {
        $this->calculatorService = $calculatorService;
    }

    public function index()
    {
        return view('calculator');
    }

    public function operation(Request $request)
    {
        try {
            $request->validate([
                'operator' => 'required|string|max:1|in:+,-,*,/',
                'numberOne' => 'required|numeric',
                'numberTwo' => 'required|numeric',
            ]);

            $operator = $request->input('operator');
            $numberOne = $request->input('numberOne');
            $numberTwo = $request->input('numberTwo');

            $result = $this->calculatorService->performOperation($numberOne, $numberTwo, $operator);
            return redirect('/calculator')->with('result', $result);
        } catch (\Exception $e) {
            return redirect('/calculator')->with('error', $e->getMessage());
        }
    }
}
