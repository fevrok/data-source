<?php

use Illuminate\Database\Seeder;

class ImportToDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Note: these dump files must be generated with DELETE (or TRUNCATE) + INSERT statements
        $sql = file_get_contents(__DIR__ . '/sql/data_cities.sql');

        if (! str_contains($sql, ['DELETE', 'TRUNCATE'])) {
            throw new Exception('Invalid sql file. This will not empty the tables first.');
        }

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }
    }
}
