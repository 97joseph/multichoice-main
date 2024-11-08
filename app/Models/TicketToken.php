<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketToken extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'ticket_tokens';

    protected $fillable = [
        'services_id',
        'telephone',
        'token_number',
        'status_id',
        'user_id',
        'used_at',
    ];

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'services_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
