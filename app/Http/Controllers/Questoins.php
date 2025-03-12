<?php

namespace App\Http\Controllers;

use App\Models\AdminConfigs;
use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Questoins extends Controller
{

    public function all()
    {
        $questions = Questions::query();
        $questions = $questions->Paginate(20);
        return view('admin.questions.all', compact('questions'));
    }

    public function create()
    {
        return view('admin.questions.creat', [
            'success' => false,
        ]);
    }

    public function create_q(Request $request)
    {

        $vali = $request->validate([
            'number' => ['required' , 'unique:'.Questions::class],
            'qtext' => 'required',
            'g1' => 'required',
            'g2' => 'required',
            'g3' => 'required',
            'g4' => 'required',
            'true_gozine' => 'required',
        ], [
            'number.unique' => 'شماره سوال تکراری است.',
            'number.required' => 'وارد کردن شماره سوال الزامی است.',
        ]);

        Questions::create([
            'number' => $vali['number'],
            'text' => $vali['qtext'],
            'g1' => $vali['g1'],
            'g2' => $vali['g2'],
            'g3' => $vali['g3'],
            'g4' => $vali['g4'],
            'true' => $vali['true_gozine'],
        ]);

        return view('admin.questions.creat', ['success' => true,]);
    }

    public function detail($id)
    {
        if (!Questions::find($id)) {
            return redirect("/admin/questions/all")->with('status', true);
        }
        return view('admin.questions.q_detail', [
            'q_data' => Questions::find($id),
            'success' => false,
        ]);

    }

    public function edit($id)
    {
        return view('admin.questions.edit', [
            'q_data' => Questions::find($id),
            'success' => false,
        ]);

    }

    public function edit_put($id)
    {
        Validator::make(request()->all(), [
            'qnumber' => 'required',
            'qtext' => 'required',
            'g1' => 'required',
            'g2' => 'required',
            'g3' => 'required',
            'g4' => 'required',
            'true_gozine' => 'required',
        ])->validate();

        $question = Questions::findOrFail($id);

        $question->update([
            'number' => request('qnumber'),
            'text' => request('qtext'),
            'g1' => request('g1'),
            'g2' => request('g2'),
            'g3' => request('g3'),
            'g4' => request('g4'),
            'true' => request('true_gozine'),
        ]);
        return redirect("/admin/questions/detail/$id")->with('success', true);

    }

    public function delete($id)
    {
        $question = Questions::findOrFail($id);
        $question->delete();
        return back()->with('status', true);
    }

    public function config()
    {
        $current_dor = AdminConfigs::where('name', 'current_dor')->first()->config;
        if ($current_dor == null){
            AdminConfigs::create([
                'name' => 'current_dor',
                'config' => 0,
            ]);
            return redirect('/admin/questions/config');
        }
        $dor = AdminConfigs::where('name', 'dor')->first()->config;
        $app = AdminConfigs::where('name', 'app')->first()->config;
        $n = Questions::count();
        return view('admin.questions.configs', ['dor' => $dor, 'current_dor' => $current_dor , 'app' => $app , 'n' => $n]);
    }

    public function config_put(Request $request)
    {
        $dor = AdminConfigs::where('name', 'dor')->first();
//        dd($request->current_dor);
        if(request('current_dor') == null) {
            $current_dor = 0;
        } else {
            $current_dor = request('current_dor');
        }
        if(AdminConfigs::where('name', 'current_dor')->update(['config' => $current_dor])) {
            return view('admin.questions.configs',['dor' => $dor->config], ['current_dor' => $current_dor]);
        } else {
            AdminConfigs::updateOrCreate(['c_name' => 'current_dor', 'config' => $current_dor]);
            return view('admin.questions.configs' , ['dor' => $dor->config] , ['current_dor' => $current_dor]);
        }
    }




}
