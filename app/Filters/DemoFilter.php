<?php

namespace App\Filters;

use Intervention\Image\Filters\FilterInterface;
use Intervention\Image\Image;

class DemoFilter implements FilterInterface
{
    /**
     * Applies filter to given image
     *
     * @param  Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        $image->greyscale();

        return $image;
    }
}