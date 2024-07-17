<?php

namespace App\Models;

use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasApiTokens, Notifiable, HasRoles;

    /**
     * The attributes that are mass
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kd_user',
        'id',
        'username',
        'name',
        'password',
        'email',
        'activation_selector',
        'activation_code',
        'forgotten_password_selector',
        'forgotten_password_code',
        'forgotten_password_time',
        'remember_selector',
        'remember_code',
        'created_on',
        'last_login',
        'active',
        'nama',
        'nama_pp',
        'nik',
        'foto',
        't_lahir',
        'tgl_lahir',
        'alamat',
        'kabupaten',
        'no_telp',
        'no_npwp',
        'nm_npwp',
        'no_rek',
        'nm_bank',
        'nm_rek',
        'end_kontrak',
        'dur_kontrak',
    ];

    public function royalti(): BelongsTo
    {
        return $this->belongsTo(Royalti::class);
    }

    public function katalog(): BelongsTo
    {
        return $this->belongsTo(katalog::class);
    }

    public function getRemainingTimeAttribute()
    {
        $endKontrak = Carbon::parse($this->attributes['end_kontrak']);
        $now = Carbon::now();

        $diff = $endKontrak->diff($now);

        $years = $diff->y;
        $months = $diff->m;
        $days = $diff->d;


        $formatted = '';

        if ($years > 0) {
            $formatted .= "$years tahun";
        }

        if ($months > 0) {
            $formatted .= ($formatted ? ', ' : '') . "$months bulan";
        }

        if ($days > 0) {
            $formatted .= ($formatted ? ', ' : '') . "$days hari";
        }

        return $formatted;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (!empty($user->password)) {
                $user->password = Hash::make($user->password);
            }
        });

        static::updating(function ($user) {
            if (!empty($user->password) && $user->isDirty('password')) {
                $user->password = Hash::make($user->password);
            }
        });
    }
}
