<?php

namespace ViktorovIO\Library\Patterns\Structural\Bridge;

use ViktorovIO\Library\Product\Enum\OSFileSystemFormatEnum;
use ViktorovIO\Library\Product\Enum\OSProductTypeEnum;

class LinuxFileSystemFormat implements OSFileSystemFormatInterface
{
    /** @return string[] */
    public function getDiskFormatList(): array
    {
        return (new OSFileSystemFormatEnum())->getOSFileSystemTypeList(OSProductTypeEnum::LINUX);
    }
}
