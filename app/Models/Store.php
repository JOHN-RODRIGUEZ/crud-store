<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'stores';
    protected $primarykey='id';
    protected $fillable = ['name','slug','front_page','description','location','nit','status'];
    protected $guarded=[];
    public $timestamps =false;
}
