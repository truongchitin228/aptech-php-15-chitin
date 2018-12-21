<?php
use App\BillDetail;
use App\Bill;
use App\Product;
use Illuminate\Database\Seeder;

class BillDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $billId = Bill:: pluck ('id')->toArray();
            $productId =Product :: pluck ('id')->toArray();
            $faker = Faker\Factory::create();
            foreach(range(1,3) as $index){
                App\BillDetail::create([
                    'amount' => $faker -> phoneNumber,
                    'id_bill' =>$billId[array_rand($billId)],
                    'id_product' =>$productId[array_rand($productId)],
                ]);
            }
        }
    }
}
