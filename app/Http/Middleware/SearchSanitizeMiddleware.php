<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SearchSanitizeMiddleware
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
        $arrFilters = array(
            'client_status_id' => FILTER_SANITIZE_SPECIAL_CHARS,
            'name' => FILTER_SANITIZE_SPECIAL_CHARS,
            'tel' => FILTER_SANITIZE_NUMBER_INT,
            'brazil_state_id' => array(
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'brazil_city_id' => array(
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'service_type_id' => array(
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'order_status_id' => array(
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'order_status' => FILTER_SANITIZE_SPECIAL_CHARS,
            'providerName' => FILTER_SANITIZE_SPECIAL_CHARS,
            'contact' => FILTER_SANITIZE_SPECIAL_CHARS,
            'firma_aberta' => array(
                'filter' => FILTER_VALIDATE_BOOL, 
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'cnh' => array(
                'filter' => FILTER_VALIDATE_BOOL, 
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'cpf' => array(
                'filter' => FILTER_VALIDATE_BOOL, 
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'digital_certification' => array(
                'filter' => FILTER_VALIDATE_BOOL, 
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'passport' => array(
                'filter' => FILTER_VALIDATE_BOOL, 
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'country_id' => array(
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_NULL_ON_FAILURE
            ),
            'city_id' => array(
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_NULL_ON_FAILURE
            ),
        );
        $inputs = filter_input_array(INPUT_GET, $arrFilters);

        $builder = $next($inputs);

        return $builder;
    }
}
