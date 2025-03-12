<?php

namespace App\Http\Controllers;

use App\Models\HQuestions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class h_questions extends Controller
{
    public function all()
    {
        $questions = HQuestions::query();
        $questions = $questions->Paginate(20);
        return view('admin.h_questions.all', compact('questions'));
    }

    public function create()
    {
        return view('admin.h_questions.creat', [
            'success' => false,
        ]);
    }

    public function create_q(Request $request)
    {

        $vali = $request->validate([
            'qnumber' => 'required',
            'qtext' => 'required',
            'g1' => 'required',
            'g2' => 'required',
            'g3' => 'required',
            'g4' => 'required',
            'true_gozine' => 'required',
        ]);

        HQuestions::create([
            'number' => $vali['qnumber'],
            'text' => $vali['qtext'],
            'g1' => $vali['g1'],
            'g2' => $vali['g2'],
            'g3' => $vali['g3'],
            'g4' => $vali['g4'],
            'true' => $vali['true_gozine'],
        ]);

        return view('admin.h_questions.creat', ['success' => true,]);
    }

    public function detail($id)
    {
        if (! HQuestions::find($id)){
            return redirect("/admin/h_questions/all")->with('status',  true);
        }
        return view('admin.h_questions.q_detail', [
            'q_data' => HQuestions::find($id),
            'success' => false,
        ]);

    }

    public function edit($id)
    {
        return view('admin.h_questions.edit', [
            'q_data' => HQuestions::find($id),
            'success' => false,
        ]);

    }

    public function edit_put($id)
    {
        Validator::make(request()->all() , [
            'qnumber' => 'required',
            'qtext' => 'required',
            'g1' => 'required',
            'g2' => 'required',
            'g3' => 'required',
            'g4' => 'required',
            'true_gozine' => 'required',
        ])->validate();

        $question = HQuestions::findOrFail($id);

        $question->update([
            'number' => request('qnumber'),
            'text' => request('qtext'),
            'g1' => request('g1'),
            'g2' => request('g2'),
            'g3' => request('g3'),
            'g4' => request('g4'),
            'true' => request('true_gozine'),
        ]);
        return redirect("/admin/h_questions/detail/$id")->with('success',  true);

    }

    public function delete($id) {
        $question = HQuestions::findOrFail($id);
        $question->delete();
        return back()->with('status',  true);
    }
}
