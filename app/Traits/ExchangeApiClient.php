<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait ExchangeApiClient
{
 
    private $baseurl;

    /**
	 * Send a get request to external service
	 * @author M Iftakher Ahammed iahammed@gmail.com
	 * @return Object
	 */

    public function get($base = '', $symbols = '')
    {
        $this->baseurl = env('EXCHANGE_API') . '?access_key=' . env('EXCHANGE_API_KEY');

        $this->baseurl = env('EXCHANGE_API') . 
                    '?access_key=' . env('EXCHANGE_API_KEY');
                    //  . '&base=' . 
                    // $base . '&symbols=' . 
                    // $symbols;
        // return $this->baseurl;

        return Http::get($this->baseurl)
			->throw()
            ->object();
			// ->json();
     }

         /**
	 * Send a get request to external service
	 * @author M Iftakher Ahammed iahammed@gmail.com
	 * @return Object
	 */

    public function getPrice($base = '',  $symbol = '')
    {
        $str = '';
        
        (isset($base) && isset($symbol)) ? $str = 'convert?from=' . $base . '&to=' . $symbol : $str = 'latest';
        
        $this->baseurl = env('EXCHANGE_API_URL') . $str;

        return  Http::get($this->baseurl)
			->throw()
            ->object()
            ->info
            ->rate;
   }


}