<?php

namespace App\Models;

use Spatie\MediaLibrary\MediaCollections\Models\Concerns\HasUuid;
use Spatie\MediaLibrary\MediaCollections\Models\Media as ModelsMedia;

class Media extends ModelsMedia
{
    use HasUuid;
}
