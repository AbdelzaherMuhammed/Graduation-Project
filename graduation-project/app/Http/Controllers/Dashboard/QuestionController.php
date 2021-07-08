<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $questions = Question::all();

        return view('dashboard.questions.index', ['questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $choices = 3;
        return view('dashboard.questions.create', ['choices' => $choices]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $choices = array_filter($request->choices);
        if ($request->correct_answer > count($choices)) {
            return redirect()->back()->with('error', 'يجب ادخال قيمة صحيحه للاجابه !');
        }

        Question::create([
            'name' => $request->name,
            'type' => $request->type,
            'choices' => $choices,
            'mark_when_correct' => $request->mark_when_correct,
            'mark_when_false' => $request->mark_when_false,

        ]);
        return redirect()->route('dashboard.questions.index')->with('success', 'Question Has been added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('dashboard.questions.edit', ['question' => $question]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, Question $question)
    {
        if ($request->choices)
        {
            $choices = array_filter($request->choices);
            if ($request->correct_answer > count($choices)) {
                return redirect()->back()->with('error', 'You have to Enter a Correct Choice !');
            }
        }

        $question->update([
            'name' => $request->name,
            'type' => $request->type,
            'choices' => $choices ?? null,
            'mark_when_correct' => $request->mark_when_correct,
            'mark_when_false' => $request->mark_when_false,
        ]);

        return redirect()->route('dashboard.questions.index')->with('success', 'Question Has been Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {

        $question->delete();

        return redirect()->route('dashboard.questions.index')->with('success', 'Question Has been deleted Successfully');

    }

}
