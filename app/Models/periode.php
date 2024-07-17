<?php

namespace App\Models;

use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class periode extends Model


{
    protected $fillable = [
        'nm_periode',
        'is_published',
    ];

    public function royalti(): BelongsTo
    {
        return $this->belongsTo(royalti::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updated(function ($periode) {
            if ($periode->isDirty('is_published') && $periode->is_published) {
                // Fetch all users with 'Member' role
                $users = User::role('Member')->get();

                // Send a notification to each user
                foreach ($users as $user) {
                    Notification::make()
                        ->success()
                        ->title('Selamat!')
                        ->body('Royalti berhasil diterima')
                        ->sendToDatabase($user);
                }
            }
        });
    }
}
    
