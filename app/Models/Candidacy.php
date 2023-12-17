<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'first_name',
        'phone',
        'address',
        'resume',
        'motivation',
    ];

    protected $table = 'candidacies';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class, 'advertisement_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
