<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 			=> 'Producto 1',
				'slug' 			=> 'producto-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://png2.kisspng.com/20180625/ho/kisspng-honda-cbr600rr-supersport-world-championship-honda-5b310907464c16.120842031529940231288.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Producto 2',
				'slug' 			=> 'producto-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 255.00,
				'image' 		=> 'https://i5.walmartimages.com/asr/67b636d2-f7e2-47c4-98b8-d30abc00855d_1.3f6079a6b8f6fb0b093097b934f4f74f.jpeg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Producto 3',
				'slug' 			=> 'producto-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 300.00,
				'image' 		=> 'http://elheraldodesaltillo.mx/wp-content/uploads/2016/10/dreamstime_1864112.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Producto 4',
				'slug' 			=> 'producto-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 475.00,
				'image' 		=> 'http://www.stickpng.com/assets/images/5aa0f9949fc609199d0ff194.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Producto 5',
				'slug' 			=> 'producto-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 280.00,
				'image' 		=> 'https://images-na.ssl-images-amazon.com/images/I/71ipU0Z6s-L._SL1500_.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Producto 6',
				'slug' 			=> 'producto-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://www.fordogtrainers.es/images/stories/virtuemart/product/collar-cuero-adornado-paseo-y-adiestramiento-perro-heavy-metal-c58.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Producto 7',
				'slug' 			=> 'producto-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://www.lenovo.com/medias/GX40L16533-PDP-main.png?context=bWFzdGVyfHJvb3R8MzE1Mjl8aW1hZ2UvcG5nfGgzMS9oZDIvOTQ5OTYyNjk2Mjk3NC5wbmd8MzJiOGQyY2FhM2FlM2NkOGI0NThkYzlhOGYxNWYxNmNmMjJkN2M3MWMyNmZiOTUyMThmODRiYWM4ZjZjZDM5OQ',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Producto 8',
				'slug' 			=> 'producto-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://image.spreadshirtmedia.net/image-server/v1/mp/products/T816A1MPA1655PT17X27Y28D16915539S85Cx000000/views/1,width=378,height=378,appearanceId=1,backgroundColor=F2F2F2,version=1517434637/desarrollador-informatico-programador-codigo-body-organico-de-manga-larga-para-bebe.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			
		);

		Product::insert($data);
    }
}
