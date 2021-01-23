<?php

declare(strict_types=1);

namespace SlimCms\Module;

class ModuleInfo
{
    /**
     * ModuleInfo constructor.
     * @param string $name
     * @param string $description
     * @param string $author
     * @param string $version
     */
    public function __construct(
        public string $name,
        public string $description,
        public string $author,
        public string $version,
    ) {}
}