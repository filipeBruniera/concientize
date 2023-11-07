<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\InterviewAnswer;

    class InterviewController extends Controller
{
    public function showQuestions()
    {
        return view('interview.questions');
    }

 public function storeAnswers(Request $request)
 {
     // Validate the input data
    $validatedData = $request->validate([
        'question1' => 'required',
        'question2' => 'required',
        'question3' => 'required',
        'question4' => 'required',
        'question5' => 'required',
        'question6' => 'required',
        'question7' => 'required',
        'question8' => 'required',
        'question9' => 'required|email|unique:interview_answers,question9',
    ]);

    // Store the answers in the database
    InterviewAnswer::create($validatedData);

    return redirect('/interview')->with('success', 'Answers stored successfully!');
 }
}
