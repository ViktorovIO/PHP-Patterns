<?php

namespace Product\Enum;

final class OSFileSystemFormatEnum
{
    public const EXT_2 = 'ext2';
    public const EXT_3 = 'ext3';
    public const EXT_4 = 'ext4';
    public const JFS = 'jfs';
    public const REISER_FS = 'reiser_fs';
    public const XFS = 'xfs';
    public const BTRFS = 'btrfs';
    public const ZFS = 'zfs';
    public const APFS = 'apfs';
    public const MAC_OS_EXTENDED = 'mac_os_extended';
    public const FAT = 'fat';
    public const EX_FAT = 'ex_fat';
    public const NTFS = 'ntfs';

    private static array $linux = [
        self::EXT_2,
        self::EXT_3,
        self::EXT_4,
        self::JFS,
        self::REISER_FS,
        self::XFS,
        self::BTRFS,
        self::ZFS
    ];

    private static array $macOs = [
        self::APFS,
        self::MAC_OS_EXTENDED,
        self::FAT,
        self::EX_FAT
    ];

    private static array $windows = [
        self::FAT,
        self::EX_FAT,
        self::NTFS
    ];

    /**
     * @return string[]
     */
    public function getOSFileSystemTypeList(string $osType): array
    {
        switch ($osType) {
            case OSProductTypeEnum::LINUX:
                return self::$linux;
            case OSProductTypeEnum::MAC_OS:
                return self::$macOs;
            case OSProductTypeEnum::WINDOWS:
                return self::$windows;
            default:
                return [];
        }
    }
}
