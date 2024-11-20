<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class StockMovementSeeder extends Seeder
{
    public function run()
    {
        // Génération de données fictives avec des dates personnalisées
        $stockMovements = [
            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '11', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '10', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '06', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],

            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '11', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '10', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '09', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],

            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '11', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '17', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '08', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],

            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '04', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '10', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '09', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],

            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '11', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '10', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '09', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],

            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '11', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '05', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '09', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],

            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '11', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '10', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '09', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],

            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '11', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '10', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '02', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],

            [
                '_id' => Str::uuid(),
                'product_id' => 1, // Remplacez par un ID valide
                'type' => 'add',
                'quantity' => 100,
                'shop_id' => 1, // Remplacez par un ID valide
                'created_at' => Carbon::create('2024', '01', '01', '14', '30'),
                'updated_at' => Carbon::create('2024', '11', '01', '14', '30'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 2,
                'type' => 'remove',
                'quantity' => 50,
                'shop_id' => 1,
                'created_at' => Carbon::create('2024', '09', '15', '10', '00'),
                'updated_at' => Carbon::create('2024', '10', '15', '10', '00'),
            ],
            [
                '_id' => Str::uuid(),
                'product_id' => 3,
                'type' => 'add',
                'quantity' => 200,
                'shop_id' => 2,
                'created_at' => Carbon::create('2024', '11', '05', '08', '45'),
                'updated_at' => Carbon::create('2024', '09', '05', '08', '45'),
            ],
        ];

        
        DB::table('stock_movements')->insert($stockMovements);
    }
}
