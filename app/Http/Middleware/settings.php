<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class settings
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
        $site_settings = DB::table('site_settings')->get();
        $settings = array();
        foreach($site_settings as $setting){
            $settings[$setting->settings_name] = $setting->settings_value;
        }
        $request->merge(["settings" => $settings]);
        return $next($request);
    }
}
