<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\User;

class Tickets extends Model {
    protected $table = 'tickets';
    protected $primarykey = 'id';
    protected $timestamp = 'false';

    public function status(){
        return $this->belongsTo(status::class, 'status_id');
    }

    public function tecnico(){
        return $this->belongsTo(User::class, 'tecnico_id');
    }

}
