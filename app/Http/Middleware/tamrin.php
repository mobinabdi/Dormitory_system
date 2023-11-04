<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
class tamrin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->validate([
            'student-number'=>'required|numbers|confirmed|min:13',
            'National-Code'=>'required|numbers|confirmed|min:10'
        ]);
        $index=DB::table('indices')->insert([
        'student-number'=>$request->input('student-number'),

        ]);

    }
}
