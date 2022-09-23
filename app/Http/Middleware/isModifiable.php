<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\bloc_note;


class isModifiable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $bloc_note = bloc_note::find($request->get('id'))->toArray();

if ($bloc_note['modification_bloc_note'] == "false") {
   
    return redirect('show/'.$request->get('id'))->with('success', 'impossible de modfié le bloc note');
} else {
    return $next($request);
}

    }
}
