<?php

namespace Rahamatj\Kaiju\Drivers;

use File;
use Rahamatj\Kaiju\Exceptions\FileDriverDirectoryNotFoundException;

class FileDriver extends Driver
{
    public function fetchPosts()
    {
        $files = File::files(base_path($this->config['path']));

        foreach($files as $file) {
            $this->parse($file->getPathName(), $file->getFileName());
        }

        return $this->posts;
    }

    protected function validateSource()
    {
        if (! File::exists(base_path($this->config['path'])))
        {
            throw new FileDriverDirectoryNotFoundException(
                'Directory at \'' . $this->config['path'] . '\' does not exist.' .
                'Check the directory path in the config file.'
            );
        }
    }
}