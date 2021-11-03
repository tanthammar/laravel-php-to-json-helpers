<?php

namespace Tanthammar\Json\Commands;

use Illuminate\Console\Command;

class JsonCommand extends Command
{
    public $signature = 'laravel-php-to-json-helpers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
