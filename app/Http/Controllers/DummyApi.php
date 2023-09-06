<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class DummyApi extends Controller
{
    public function index()
    {
        return question::all();
    }

    public function find($id)
    {
        return question::find($id);
    }

    public function findopt($id = null)
    {
        return ($id) ? question::find($id) : question::all();
    }

    public function addData(Request $request)
    {
        $quest = new question;
        $quest->question = $request->question;

        if ($quest->save()) {
            return ["result" => "Data Added Succeed"];
        } else {
            return ["result" => "Data Addition Failed"];
        }
    }

    public function updateData(Request $request)
    {
        $quest = question::find($request->id);

        $quest->question = $request->question;

        if ($quest->save()) {
            return ["result" => "Data Update Succeed"];
        } else {
            return ["result" => "Data Update Failed"];
        }
    }

    public function deleteData($id)
    {
        $quest = question::find($id);

        if ($quest->delete()) {
            return ["result" => "Data Removed Succeed"];
        } else {
            return ["result" => "Data Remove Failed"];
        }
    }

    public function searchData($quest)
    {
        return question::where("question", "like", "%" . $quest . "%")->get();
    }
}
