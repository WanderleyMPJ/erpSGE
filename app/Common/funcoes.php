<?php
/**
 * Created by PhpStorm.
 * User: Wanderley
 * Date: 21/06/2018
 * Time: 21:58
 */
namespace App\Common;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait funcoes
{
    protected function onlyTrashedIfRequested(Request $request, Builder $query ){
        if($request->get('trashed')==1){
            $query = $query->onlyTrashed();
        }
        return $query;
    }
}