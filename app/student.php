<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //Field Mana saja yang boleh di isi di tabel database
    protected $fillable = ['nama','nrp','email','jurusan'];
}
