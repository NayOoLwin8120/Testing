<?php

namespace App\Models;

use App\Models\Footer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}
