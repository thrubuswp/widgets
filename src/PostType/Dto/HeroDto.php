<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class HeroDto
{

    public function __construct(
        public readonly string $title,
        #[SerializedName('image_url')]
        public readonly string $imageUrl,
        public readonly string $description,
        public readonly ?string $subtitle = null
    ) {}
}
