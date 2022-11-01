<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class companys extends Model
{
    use HasFactory;

    public static function exist($sub){

        $results = DB::select('select id from companys where subdomain = :sub', ['sub' => $sub]);
        if ($results != null):
            return true;
        else:
            return false;
        endif;
    }
}
