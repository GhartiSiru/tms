<?php

namespace App\Helpers;

use App\Models\Subject;

/**
 * OfficeHelper
 */
class SubjectHelper
{
    /**
     * @param Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }

    public function subjectDropdown()
    {
        return $this->subject->pluck('subject', 'id')->prepend('Select Subject');
    }
}
