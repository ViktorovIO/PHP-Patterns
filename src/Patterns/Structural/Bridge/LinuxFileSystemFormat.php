<?php

namespace Patterns\Structural\Bridge;

use Product\Enum\OSFileSystemFormatEnum;
use Product\Enum\OSProductTypeEnum;

class LinuxFileSystemFormat implements OSFileSystemFormatInterface
{
    /** @return string[] */
    public function getDiskFormatList(): array
    {
        return (new OSFileSystemFormatEnum())->getOSFileSystemTypeList(OSProductTypeEnum::LINUX);
    }
}
