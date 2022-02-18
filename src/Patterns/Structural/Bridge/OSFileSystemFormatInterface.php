<?php

namespace ViktorovIO\Library\Patterns\Structural\Bridge;

interface OSFileSystemFormatInterface
{
    /** @return string[] */
    public function getDiskFormatList(): array;
}
