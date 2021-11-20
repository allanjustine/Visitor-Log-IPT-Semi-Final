<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    protected $fillable = [
        'name','phone','purpose','time'];

    protected $table = 'visitorlog';

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function list(){
        $visitorlog = VisitorLog::all();

        return view('visitorlog.index',['visitorlog'=>$visitorlog]);
    }

}

