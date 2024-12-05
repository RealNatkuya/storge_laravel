<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Project_type extends Model
{
    protected $table = "project_type";
    protected $fillable= ['pjt_name'];
}