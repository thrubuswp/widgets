<?php

declare(strict_types=1);

namespace ThrubusWP\Widgets\PostType\UmrohHaji\Dto;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class GaleryDto
{

    public function __construct(
        public readonly array $images,
    ) {}
}
