<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\UmrohHaji\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class RiviewCustomerDto
{

    public function __construct(
        public readonly string $username,
        public readonly string $text,
        #[SerializedName('image_url')]
        public readonly string $imageUrl,
        public readonly float $rating,
    ) {}
}
