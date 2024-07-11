<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversitySupervisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'position',
        'university_id',
        'address',
        'accessable_interns'
    ];

    protected $casts = [
        'accessable_interns' => 'array'
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function interns()
    {
        return $this->hasMany(Intern::class);

}
}
