<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Invoice;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StatusCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Invoice::where('status') === OrderStatus::Processing) {
            return response('Invoice is still processing', 403);
        }

        return $next($request);
    }
}
