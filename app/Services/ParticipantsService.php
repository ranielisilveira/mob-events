<?php

namespace App\Services;

use App\Models\Participants;
use App\Repositories\ParticipantsRepository;
use Illuminate\Support\Collection;

class ParticipantsService
{
    private $participantsRepository;

    public function __construct(
        ParticipantsRepository $participantsRepository,
    ) {
        $this->participantsRepository = $participantsRepository;
    }

    public function getAll(): Collection
    {
        return $this->participantsRepository->getAll();
    }

    public function create(array $data): Participants
    {
        return $this->participantsRepository->create($data);
    }
}
