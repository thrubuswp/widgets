<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\UmrohHaji\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class WhyShouldDto
{

    public function __construct(
        public readonly string $title,
        public readonly string $description,
        #[SerializedName('image_url')]
        public readonly string $imageUrl,
    ) {}
}
