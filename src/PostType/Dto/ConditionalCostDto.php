<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class ConditionalCostDto
{

    public function __construct(
        public readonly string $title,
        public readonly array $items,
    ) {}
}
