<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\UmrohHaji\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class HeroDto
{

    public function __construct(
        #[SerializedName('welcome_text')]
        public readonly string $welcomeText,
        public readonly string $title,
        public readonly string $description,
        #[SerializedName('image_url')]
        public readonly string $imageUrl,
        public readonly array $certains,
    ) {}
}
