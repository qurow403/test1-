<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\TestController;
use App\Http\Requests\ContactRequest;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        if (!$request->isMethod('post')) {
            return redirect('/');
        }

        $contact = $request->only(['first_name', 'last_name', 'email', 'gender', 'tel1', 'tel2', 'tel3',  'address', 'building', 'select_box', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'email', 'gender', 'tel1', 'tel2', 'tel3', 'address', 'building', 'select_box', 'content']);

        $contact['select_box'] = $request->input('select_box', 'その他');

        $saved = Contact::create($contact);

        if ($saved) {
            return redirect()->route('thanks');
        } else {
        return back()->withErrors('送信に失敗しました');
        }
    }
}
