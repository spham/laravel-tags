<?php

namespace Spham\LaravelTags\Commands;

use Illuminate\Console\Command;

class LaravelTagsCommand extends Command
{
    public $signature = 'laravel-tags';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
