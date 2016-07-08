<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class SeedDump extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:dump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate seeders';

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
        $db = config('database.connections.mysql.database');
        $ignores = config('database.connections.mysql.ignores');
        $query = "show tables where Tables_in_$db not like '%migrations'";
        foreach ($ignores as $prefix) {
            $query .= " and Tables_in_$db not like '{$prefix}%'";
        }
        $tables = DB::select($query);
        $this->info('tables list:');
        $items = [];
        foreach ($tables as $i => $table) {
            $name = $table->{'Tables_in_'.$db};
            $this->line("- ".$name);
            $skips = [
                'logs',
            ];
            if (in_array($name, $skips)) {
                $this->line("!! skipping $name table");
            } else {
                $items[] = $name;
            }
        }
        $this->call('iseed', [
            "tables" => implode(",", $items),
            "--force" => true,
        ]);
    }
}
