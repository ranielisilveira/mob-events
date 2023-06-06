<?php

namespace App\Services;

use App\Models\Attendance;
use App\Repositories\AttendanceRepository;

class AttendanceService
{
    private $attendanceRepository;

    public function __construct(
        AttendanceRepository $attendanceRepository,
    ) {
        $this->attendanceRepository = $attendanceRepository;
    }

    public function create(array $data): Attendance
    {
        return $this->attendanceRepository->create($data);
    }
}
