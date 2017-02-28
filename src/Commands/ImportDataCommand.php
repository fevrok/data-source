<?php

namespace LaravelArab\DataSource;

use Illuminate\Console\Command;

class ImportDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'datasource:importData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment('Importing Data To your database...');
        foreach ($paths as $key => $path) {
            \DB::unprepared(file_get_contents($path));
            $this->info("{$key} record(s) added.");
        }        
        $this->comment('All done!');
    }
}
