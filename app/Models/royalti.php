<?php

namespace App\Models;

use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Royalti extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'kd_user',
        'kd_periode',
        'general',
        'optimasi',
        'pending',
        'detail_royalti',
        'general_pdf',
        'optimasi_pdf',
        'bukti_transfer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'kd_user');
    }

    public function periode(): BelongsTo
    {
        return $this->belongsTo(Periode::class, 'kd_periode');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('bukti_transfer');
    }

    public function resolveSpatieMediaLibraryImageColumn(string $columnName): ?string
    {
        $media = $this->getFirstMedia($columnName);

        if ($media) {
            return $media->getUrl();
        }

        return null;
    }

    protected static function boot()
    {
        parent::boot();

        static::updated(function ($royalti) {
            if ($royalti->isDirty('is_published') && $royalti->is_published) {
                // Fetch the user associated with this royalty
                $user = User::find($royalti->kd_user);

                // Check if the user is a member
                if ($user->hasRole('Member')) {
                    // Send a notification to the user
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
