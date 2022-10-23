<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Chirp
 *
 * @property int $id
 * @property int $user_id
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp whereUserId($value)
 * @mixin \Eloquent
 */
class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
