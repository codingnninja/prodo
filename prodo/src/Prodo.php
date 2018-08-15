<?php 
namespace Codingnninja\Prodo;

use Codingnninja\Prodo\Interfaces\ProdoInterface;
use Illuminate\Support\Facades\Config;

class Prodo implements ProdoInterface
{
/**
     * check if debug is enabled in production
     */
    public function is_debug_on($status='production')
    {
        if(config('app.is_debug_on') === true && $status === 'production'){
            env('APP_DEBUG',false);
        	return '<div style = "height:70px;background:red; text-align:center; color:#fff; position:absolute; top:0px; z-index:5000;padding:20px;font-size:20px;width:100%"> 
        				Debug mode is set to true in production; You are advised to set it to false for security reasons.
        			</div>';
        }
    }
}