<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kd_katalog',
        'tgl_submit',
        'kd_user',
        'judul_lagu',
        'performer',
        'composer',
        'song_control',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'kd_user');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // Tambahkan atribut yang ingin Anda sembunyikan
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tgl_submit' => 'datetime',
        'kd_user' => 'integer',
        'judul_lagu' => 'string',
        'performer' => 'string',
        'composer' => 'string',
        'song_control' => 'string',
    ];
}
