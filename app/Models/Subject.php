<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $guarded = [];

    /**
     * The educations that belong to the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function educations(): BelongsToMany
    {
        return $this->belongsToMany(EducationCenter::class, 'subject_education_center_relation', 'subject_id', 'edu_id');
    }
}
