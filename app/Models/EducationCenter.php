<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Storage;

class EducationCenter extends Model
{
    use HasFactory;

    protected $table = "education_centers";

    protected $guarded = [];

    /**
     * The subjects that belong to the EducationCenter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'subject_education_center_relation', 'edu_id', 'subject_id')->withTimeStamps();
    }

    /**
     * Get image of user by checking file exists
     *
     * @return string
     */
     public function getImage()
    {
        $check = Storage::disk('public')->has($this->img);
        if ($check) {
            return Storage::url($this->img);
        }

        return false;
    }

}
