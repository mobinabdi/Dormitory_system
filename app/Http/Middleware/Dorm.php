<?php

namespace App\Http\Middleware;

use App\Models\index;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class Dorm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $login=index::where('National','=',$request->National)->first();
        if($login && $request->student == $login->student) {
            return back()->with('ful','ورود');
        }
        else{
            return back()->with('message','شماره دانشجویی یا کد ملی اشتباه است');
        }

    }


}
