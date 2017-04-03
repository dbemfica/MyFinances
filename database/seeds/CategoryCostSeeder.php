<?php

use Phinx\Seed\AbstractSeed;

class CategoryCostSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = \Faker\Factory::create('pt-BR');
        $category = $this->table('category_costs');
        for ($i = 0; $i < 10; $i++){
            $data[] = [
                'name' => $faker->name,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
        }
        $category->insert($data)->save();
    }
}
