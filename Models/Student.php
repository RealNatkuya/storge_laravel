<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";
    protected $fillable= ['std_sid','std_fname','std_lname','std_ttl_id','std_pgm_id'];

    public function title() : BelongsTo {
        return $this->belongsTo(Title::class,'std_ttl_id');
    }
    public function program() : BelongsTo {
        return $this->belongsTo(Program::class,'std_pgm_id');
    }
}
