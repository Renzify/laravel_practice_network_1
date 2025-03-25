<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('created_at', 'desc')->get();
        return view('members.index', ["members" => $members]);
    }

    public function show($id)
    {
        $member = Member::findorFail($id);
        return view('members.show', ['member' => $member]);
    }

    public function create()
    {
        return view('members.create');
    }
}
