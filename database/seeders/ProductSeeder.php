<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Carne la vaquera',
            'image' => 'https://media.istockphoto.com/id/451113259/es/foto/colombiano-comida-serie-ver-m%C3%A1s.jpg?s=612x612&w=0&k=20&c=rPE8O54uTavTM9al5D1Ie93znt1ydVBJFKunGZDSGwc=',
            'description' => 'Product description...  para bistec provienen de la costilla, lomo corto o cortes primarios de lomo.',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Hamburguesa extraGrande',
            'image' => 'https://cdn.pixabay.com/photo/2017/02/03/03/54/burger-2034433_640.jpg',
            'description' => 'Product description...  para bistec provienen de la costilla, lomo corto o cortes primarios de lomo.',
            'quantity' => 100,
            'price' => 10000
        ]);

        Product::create([
            'name' => 'Carne la vaquera',
            'image' => 'https://cdn.pixabay.com/photo/2016/01/22/02/13/meat-1155132_640.jpg',
            'description' => 'Product description...  para bistec provienen de la costilla, lomo corto o cortes primarios de lomo.',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Carne ala caliente',
            'image' => 'https://cdn.pixabay.com/photo/2016/01/22/02/13/meat-1155132_640.jpg',
            'description' => 'Product description...  para bistec provienen de la costilla, lomo corto o cortes primarios de lomo.',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Pollo Sudado',
            'image' => 'https://traveler.marriott.com/es/wp-content/uploads/sites/2/2021/09/GI-168251564-Sancocho-Gallina-1920x1080.jpg',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Ajiaco',
            'image' => ' https://www.azorhoteles.com/wp-content/uploads/2020/03/20200325-Blog-Azor-platos-tipicos-cali-probar.jpg',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Arroz con Pollo',
            'image' => ' https://www.azorhoteles.com/wp-content/uploads/2020/03/20200325-Blog-Azor-platos-tipicos-cali-probar-atollado.jpg',
            'description' => 'Product description...  Lorem ipsum dolor sit amet consectetur adipisicing elit. In, voluptatem. Facere ratione maxime voluptas placeat? Quibusdam suscipit minus asperiores ullam. Ipsa, dignissimos..',
            'quantity' => 100,
            'price' => 10000
        ]);
        Product::create([
            'name' => 'enpanadas chile',
            'image' => 'https://cdn.pixabay.com/photo/2016/11/11/17/49/schnitzel-1817337_640.jpg',
            'description' => 'Product description...  para bistec provienen de la costilla, lomo corto o cortes primarios de lomo.',
            'quantity' => 100,
            'price' => 10000
        ]);
 
     
        Product::create([
            'name' => 'costillitas',
            'image' => 'https://cdn.pixabay.com/photo/2016/03/05/20/07/abstract-1238657_640.jpg',
            'description' => ' pollo a la broster o pollo a la broaster, en qué se diferencian, lo mismo en pollo al spiedo, pollo al espiedo, pollo espiedero.',
            'quantity' => 100,
            'price' => 10000
        ]);
     
       
    }
}
