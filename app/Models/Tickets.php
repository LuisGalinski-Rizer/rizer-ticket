<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class Tickets extends Model {
    protected $table = 'tickets';
    protected $primarykey = 'id';
    protected $timestamp = 'false';

    public function status(){
        return $this->belongsTo(status::class, 'status_id');
    }
}
