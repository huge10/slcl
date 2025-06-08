<?php

namespace Huge10\Slcl\Commands;

use Illuminate\Console\Command;

class SlclCommand extends Command
{
    public $signature = 'slcl';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
