<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use Illuminate\Http\Request;
use App\Http\Requests\StorequizRequest;
use App\Http\Requests\UpdatequizRequest;
use App\Models\BankQuestion;
use App\Models\Answer;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $bank_quiz = BankQuestion::where('quiz_id', $id)->get();
        $count_quiz = BankQuestion::where('quiz_id', $id)->count();
        return view('quiz', compact('bank_quiz', 'count_quiz'));
    }

    public function result(Request $request)
    {
        // Retrieve the bank quiz questions and answers
        $bankQuiz = BankQuestion::where('quiz_id', $request->quiz_id)->get();
        $answers = Answer::all()->keyBy('bank_question_id');

        $correctCount = 0;
        $wrongCount = 0;
        $totalPoints = 0;

        foreach ($bankQuiz as $question) {
            $userAnswer = $request->input('option.' . $question->id);
            $correctAnswer = $answers[$question->id]->answer;

            if ($userAnswer == $correctAnswer) {
                $correctCount++;
                $totalPoints += $question->point; // Assuming you have a 'points' column in the 'bank_question' table
            } else {
                $wrongCount++;
            }
        }

        $conclusion = $this->generateConclusion($wrongCount);

        return view('result', compact('correctCount', 'wrongCount', 'totalPoints','conclusion'));
    }

    private function generateConclusion($wrongCount)
{
    if ($wrongCount == 0) {
        return 'Anda sangat memahami betapa bahayanya penyakit diabetes yang dapat menyerang tubuhmu sendiri';
    } elseif ($wrongCount >= 1 && $wrongCount <= 5) {
        return 'Anda berada di level dimana anda sedikit lagi menjadi yang teratas dalam memahami bahaya dari penyakit diabetes untuk tubuh manusia';
    } elseif ($wrongCount >= 6 && $wrongCount <= 10) {
        return 'Anda berada di level dimana anda cukup baik untuk memahami bahaya mengonsumsi glukosa yang berlebih dan efek buruk glukosa berlebih pada tubuh anda';
    } elseif ($wrongCount >= 11 && $wrongCount <= 15) {
        return 'Anda cukup memahami bahaya penyakit diabetes yang dapat menyerang tubuhmu';
    } elseif ($wrongCount >= 16 && $wrongCount <= 20) {
        return 'Anda sedikit memahami bahaya penyakit diabetes yang dapat menyerang tubuhmu';
    } elseif ($wrongCount >= 21 && $wrongCount <= 25) {
        return 'Anda masih belum memahami bahaya penyakit diabetes yang dapat menyerang tubuhmu';
    }

    return 'Kesimpulan tidak dapat ditentukan'; // Default in case of an unexpected input
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
    public function store(StorequizRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $quiz = quiz::all();
        return view('index',compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatequizRequest $request, quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(quiz $quiz)
    {
        //
    }
}
