<?php

use Phinx\Seed\AbstractSeed;

class CategoryCostsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @New_sennd:
     * & php vendor/bin/phinx seed:create UserSeeder
     * @execut_sennd
     * & php vendor/bin/phinx seed:run
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');
        $categoryCosts = $this->table('category_costs');
        $data = [];
        foreach (range(1,10) as $value){
            $data[] = [
                'name' => $faker->name,
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s')
            ];
        }
        $categoryCosts->insert($data)->save();
    }
}
