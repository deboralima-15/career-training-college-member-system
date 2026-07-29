<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|integer',
            'email' => 'required|email|unique:members',
            'phone' => 'required',
            'address' => 'required',
            'professional_summary' => 'required',
        ]);

        Member::create($request->all());

        return redirect('/home')->with('success', 'Member added successfully.');
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('members.show', compact('member'));
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|integer',
            'email' => 'required|email|unique:members,email,' . $id,
            'phone' => 'required',
            'address' => 'required',
            'professional_summary' => 'required',
        ]);

        $member->update($request->all());

        return redirect('/home')->with('success', 'Member updated successfully.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect('/home')->with('success', 'Member deleted successfully.');
    }
}
 

