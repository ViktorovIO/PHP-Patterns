<?php

namespace Patterns\Structural\Bridge;

interface OSFileSystemFormatInterface
{
    /** @return string[] */
    public function getDiskFormatList(): array;
}
