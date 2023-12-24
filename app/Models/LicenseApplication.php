<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LicenseApplication extends Model
{
    use HasFactory;
    protected $table = 'license_applications';
    protected $guarded = ['*'];

    public function business():BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function license_category(): BelongsTo
    {
        return $this->belongsTo(LicenseCategory::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }
}
