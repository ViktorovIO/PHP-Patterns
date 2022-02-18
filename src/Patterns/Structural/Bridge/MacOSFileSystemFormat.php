<?php

namespace ViktorovIO\Library\Patterns\Structural\Bridge;

use ViktorovIO\Library\Product\Enum\OSFileSystemFormatEnum;
use ViktorovIO\Library\Product\Enum\OSProductTypeEnum;

class MacOSFileSystemFormat implements OSFileSystemFormatInterface
{
    /** @return string[] */
    public function getDiskFormatList(): array
    {
        return (new OSFileSystemFormatEnum())->getOSFileSystemTypeList(OSProductTypeEnum::MAC_OS);
    }
}
