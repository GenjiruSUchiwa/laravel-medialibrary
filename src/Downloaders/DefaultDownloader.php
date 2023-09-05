<?php

namespace Spatie\MediaLibrary\Downloaders;

use Spatie\MediaLibrary\MediaCollections\Exceptions\UnreachableUrl;

class DefaultDownloader implements Downloader
{
    public function getTempFile(string $url): string
    {
        //file_put_contents($temporaryFile, $stream);
        return tempnam(sys_get_temp_dir(), 'media-library');
    }
}
