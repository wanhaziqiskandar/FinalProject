<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('member.index', [
            'members' => Member::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Member::create($request->all()); //take all data in $request and create instace of the table members

        return redirect(route('member.index')); //redirect user to member.index
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('member.show', [
            'member' => $member,
            'loans' => Loan::where('member_id', '=', $member->id)->whereNull('returnDate')->paginate(25),
            'records' => Loan::where('member_id', '=', $member->id)->whereNotNull('returnDate')->orderBy('id', 'DESC')->paginate(25),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
