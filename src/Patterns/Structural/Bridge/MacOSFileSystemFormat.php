<?php

namespace Patterns\Structural\Bridge;

use Product\Enum\OSFileSystemFormatEnum;
use Product\Enum\OSProductTypeEnum;

class MacOSFileSystemFormat implements OSFileSystemFormatInterface
{
    /** @return string[] */
    public function getDiskFormatList(): array
    {
        return (new OSFileSystemFormatEnum())->getOSFileSystemTypeList(OSProductTypeEnum::MAC_OS);
    }
}
