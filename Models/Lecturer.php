<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Lecturer extends Model
{
    protected $table = "lecturer";
    protected $fillable= ['ltr_fname','ltr_lname','ltr_ttl_id'];


    public function title() : BelongsTo {
        return $this->belongsTo(Lecturer::class,'ltr_ttl_id');
    }

}