<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\UmrohHaji\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class NewUmrahDto
{

    public function __construct(
        public readonly string $name,
        public readonly float $star,
        public readonly string $periode,
        public readonly array $hotels,
        #[SerializedName('maskapai_icons')]
        public readonly array $maskapaiIcons,
        public readonly string $price,
    ) {}
}
