<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'supplier_name' => 'Jeeem Catering Services',
            'contact_number' => '0941248231',
            'address' => 'Makati',
        ]);
        DB::table('suppliers')->insert([
            'supplier_name' => 'Jeeem party needs',
            'contact_number' => '0941248232',
            'address' => 'Makati',
        ]);
        DB::table('suppliers')->insert([
            'supplier_name' => 'Jeeem Photography',
            'contact_number' => '0941248233',
            'address' => 'Makati',
        ]);

        //supplier services

        DB::table('supplier_services')->insert([
            'service_name' => 'Catering Services',
            'supplier_id' => '1',
        ]);
        DB::table('supplier_services')->insert([
            'service_name' => 'Party needs',
            'supplier_id' => '2',
        ]);
        DB::table('supplier_services')->insert([
            'service_name' => 'Photography',
            'supplier_id' => '3',
        ]);
    
    }
}
