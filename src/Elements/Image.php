<?php

declare(strict_types=1);

namespace SlackPhp\BlockKit\Elements;

use SlackPhp\BlockKit\Property;
use SlackPhp\BlockKit\Validation\{RequiresAllOf, ValidString};

#[RequiresAllOf('image_url', 'alt_text')]
class Image extends Element
{
    public function __construct(
        #[Property('image_url'), ValidString(3000)] public ?string $imageUrl = null,
        #[Property('alt_text'), ValidString(2000)] public ?string $altText = null,
    ) {
        parent::__construct();
        $this->imageUrl($imageUrl);
        $this->altText($altText);
    }

    public function imageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function altText(?string $alt): self
    {
        $this->altText = $alt;

        return $this;
    }
}
