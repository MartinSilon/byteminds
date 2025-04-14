<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestRun extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_id', 'employee_id', 'status', 'executed_at',
        'notes', 'attachments'
    ];

    protected $casts = [
        'attachments' => 'array',
        'executed_at' => 'datetime',
    ];

    public function testCase()
    {
        return $this->belongsTo(TestCase::class, 'case_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}


