<?php

namespace App\Http\Controllers;

use Abuhamidah\Hijri\Hijri;
use Abuhamidah\Number\Number;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // alert()->image('حياك يا غالي', 'أهلا بك في برنامج طباعة الشيكات', '../assets/deal.png', '64', '64');
        return view('cheque');
    }


    public function printCheque(Request $request)
    {
        $this->validate(
            $request,
            [
                'country' =>  'required',
                'payTo' =>  'required',
                'money' =>  'required',
                'kind' =>  'required'
            ],
            [],
            [
                'country' =>  'حرر في',
                'payTo' =>  'إدفعوا لأمر',
                'money' =>  'مبلغ',
                'kind' =>  'نوع الشيك'
            ]
        );

        $country = $request->country;
        $payTo = $request->payTo;
        $money = $request->money;
        $note = $request->note;
        $date = Number::int2indic(Hijri::date('Y/m/d ', strtotime(Carbon::now()))) . 'هـ';
        $kind = $request->kind;

        if ($request->has('kind') && $request->kind >= 0) {
            if ($kind == 0) {
                return view('pbc', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 1) {
                return view('pbcRS', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 2) {
                return view('pbcReyad', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 3) {
                return view('pbcAhly', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 5) {
                return view('pbcBelad', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 6) {
                return view('pbc-sab', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 7) {
                return view('pbcj', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 4) {
                return view('pbc-inma', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 8) {
                return view('pbc-holandi', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 9) {
                return view('pbc-ahly-yellow', compact('country', 'payTo', 'money', 'date', 'note'));
            } elseif ($kind == 10) {
                return view('pbcz', compact('country', 'payTo', 'money', 'date', 'note'));
            }
        } else {
            // flash()->error('خطأ يا غالي', 'لا بد من اختيار نوع الشيك المراد طباعته');
            alert()->error('خطأ يا غالي', 'لا بد من اختيار نوع الشيك المراد طباعته');
            return view('cheque')->withErrors('تأكد من اختيار نوع الشيك', 'kind');
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
