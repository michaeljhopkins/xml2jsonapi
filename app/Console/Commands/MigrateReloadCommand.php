<?php

namespace Xjson\Console\Commands;

use Config;
use DB;
use Illuminate\Console\Command;
use Schema;

class MigrateReloadCommand extends Command {
    protected $name = 'migrate:reload';
    protected $description = 'Drop All Tables Systematically.';

    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        $tables_in_database = "Tables_in_".Config::get('database.connections.mysql.database');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($tables as $table) {
            Schema::drop($table->$tables_in_database);
            $this->info("<info>Dropped: </info>".$table->$tables_in_database);
        }

        exec('php artisan migrate --force -vvv', $migrateOutput);
        $this->info(implode("\n", $migrateOutput));
        $this->info('Migrated');
        exec('php artisan db:seed --force -vvv', $seedOutput);
        $this->info(implode("\n", $seedOutput));
        $this->info('Seeded');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
