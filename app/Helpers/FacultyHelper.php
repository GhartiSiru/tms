<?php

namespace App\Helpers;

use App\Models\Faculty;

/**
 * OfficeHelper
 */
class FacultyHelper
{
    /**
     * @param Faculy $faculty
     */
    public function __construct(Faculty $faculty)
    {
        $this->faculty = $faculty;
    }

    public function facultyDropdown()
    {
        return $this->faculty->pluck('faculty_name', 'id')->prepend('Select Subject');
    }
}
