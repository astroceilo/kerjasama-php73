<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAngketKepuasanLayanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'angket_kepuasan_layanan';
    protected $guarded = ['id'];
}
