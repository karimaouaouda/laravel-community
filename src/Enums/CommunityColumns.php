<?php


namespace LaravelCommunity\Enums;

enum CommunityColumns : string
{
    case FEELING = 'post-with-feeling';

    case IMAGE = 'post-with-image';

    case IMAGES = 'post-with-multiple-images';

    case FILE = 'post-with-file';

    case FILES = 'post-with-multiple-files';

    case VIDEO = 'post-with-video';
}
