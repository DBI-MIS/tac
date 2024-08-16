<?php

namespace App\Models;
use App\Notifications\ResponseUpdate;
use App\ResponseStatus;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Response extends Model
{
    use HasFactory;
    use Notifiable;

    protected function serializeDate(DateTimeInterface $date_response)
    {

    return $date_response->format('m d, Y');
    
    }

    protected $fillable = [
        'product_id',
        'full_name',
        'date_response',
        'contact_no',
        'email_address',
        'message',
        'review',
        'status',
    ];

    protected $casts = [
        'date_response' => 'datetime',
        'review' => 'boolean',
    ];
    protected $attributes = [
        'date_response' => null, // or Carbon::now()->format('Y-m-d')
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id' );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    
}
