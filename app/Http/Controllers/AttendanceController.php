<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAttendanceRequest;
use App\Http\Resources\AttendanceResource;
use App\Services\AttendanceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class AttendanceController extends Controller
{
    private $attendanceService;

    public function __construct(
        AttendanceService $attendanceService,
    ) {
        $this->attendanceService = $attendanceService;
    }

    public function store(CreateAttendanceRequest $request): JsonResponse
    {
        $data = $request->all();
        $event = $this->attendanceService->create($data);

        return response()->json(
            AttendanceResource::make($event),
            Response::HTTP_CREATED,
        );
    }
}
