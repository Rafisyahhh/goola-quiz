<?php

namespace App\Http\Controllers;

use App\Models\BankQuestion;
use App\Models\Answer;
use Illuminate\Support\Str;
use App\Http\Requests\StoreBankQuestionRequest;
use App\Http\Requests\UpdateBankQuestionRequest;

class BankQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexBank($id)
    {
        $quiz_id = $id;
        $bank_quiz = BankQuestion::where('quiz_id', $id)->get();
        $answers = Answer::where('quiz_id', $id)->get()->keyBy('bank_question_id');
        return view('admin.bank_question', compact('bank_quiz', 'quiz_id', 'answers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBankQuestionRequest $request)
    {
        if ($request->hasFile('image')) {
            $foto = $request->file('image');
            $ekstensi = $foto->getClientOriginalExtension();
            $namaFoto = Str::random(10) . '.' . $ekstensi;
            $foto->move(public_path('image'), $namaFoto);
        } else {
            $namaFoto = null;
        }
        $bank_soal = BankQuestion::create([
            'quiz_id' => $request->quiz_id,
            'question' => $request->question,
            'image' => $namaFoto,
            'option_1' => $request->option_1,
            'option_2' => $request->option_2,
            'option_3' => $request->option_3,
            'option_4' => $request->option_4,
            'point' => $request->point,
        ]);
        return redirect()->route("bank.index", [$request->quiz_id])->with("success", "Berhasil Menambah Soal");
    }

    /**
     * Display the specified resource.
     */
    public function show(BankQuestion $bankQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BankQuestion $bankQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBankQuestionRequest $request, BankQuestion $bankQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BankQuestion $bankQuestion)
    {
        //
    }
}
