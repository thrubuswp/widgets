<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\TravelShuttle\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class ScheduleDto
{

    public function __construct(
        public readonly string $destination,
        #[SerializedName('first_hour')]
        public readonly string $firstHour,
        #[SerializedName('end_hour')]
        public readonly string $endHour,
        public readonly string $price
    ) {}
}
