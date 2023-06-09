<?php 

namespace App\Modules\Search\Interfaces;

use Illuminate\Http\Request;

interface SearchServiceInterface {
    public function get(Request $request);
}