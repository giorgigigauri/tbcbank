<?php

namespace GiorgiGigauri\TbcBank\Commands;

use Illuminate\Console\Command;

class TbcbankCommand extends Command
{
    public $signature = 'tbcbank';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
