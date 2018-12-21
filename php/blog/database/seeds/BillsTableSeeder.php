<?php
use App\Bill;
use App\BillDetail;
use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customerId= App\Customer:: pluck('id') -> toArray();
        $faker = Faker\Factory::create();
        foreach(range(1,3) as $index){
            App\Bill::create([
                'date_order' => $faker ->date($format ='Y-m-d',$max = 'now'),
                'total' => $faker -> phoneNumber,
                'id_customer' =>$customerId[array_rand($customerId)],

            ]);
        }
    }
}
