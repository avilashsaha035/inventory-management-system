<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'date','account','debit','credit','reference_id'
    ];

    public function sale() {
        return $this->belongsTo(Sale::class, 'reference_id');
    }
}
