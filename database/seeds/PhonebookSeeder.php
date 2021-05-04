<?php

use Illuminate\Database\Seeder;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Вызываем созданую фабрику (100 это цыфра сколько раз мы ее вызываем = 100 новых записей в нашем Phone Book)
        factory(\App\Phonebook::class,100)->create();
    }
}
