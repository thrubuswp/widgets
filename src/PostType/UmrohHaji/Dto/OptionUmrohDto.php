<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\UmrohHaji\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class OptionUmrohDto
{

    public function __construct(
        public readonly string $name,
        public readonly float $star,
        #[SerializedName('image_url')]
        public readonly array $imageUrl,
        public readonly string $price,

    ) {}
}
