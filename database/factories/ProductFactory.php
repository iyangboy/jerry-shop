<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $image = $faker->randomElement([
        "https://qiniu.haoglj.com/upload/photos/2019/12/24/8aef3cdf4c942452b2210d3b0e8605a8.png",
        "https://qiniu.haoglj.com/upload/photos/2019/12/11/182fbddad2bbacf13d0d5b739e7eee6c.png",
        "https://qiniu.haoglj.com/upload/photos/2019/11/12/603f5a68fd105dfe012fc62f1dd62934.jpg",
        "https://qiniu.haoglj.com/upload/photos/2019/11/12/59efe1c847988198d5137af27583b911.jpg",
        "https://qiniu.haoglj.com/upload/photos/2019/11/12/3b859f72ec6f8f346ac0ceaf48361552.jpg",
        "https://qiniu.haoglj.com/upload/photos/2019/12/20/616d24758bbd2ea51b92d9a8ffc3ddd5.png",
        "https://qiniu.haoglj.com/upload/photos/2019/11/15/5ae079be5daf5d339528e8eae5ee63d1.jpg",
        "https://qiniu.haoglj.com/upload/photos/2019/12/25/c16e0139a5604cd378f3242e905514de.png",
        "https://qiniu.haoglj.com/upload/photos/2019/12/25/2156b467c189a96e0e6d5ed228743ea8.png",
        "https://qiniu.haoglj.com/upload/photos/2019/12/25/3ef08e25cdd4d1e5109313ace1a024c2.png",
    ]);

    // 从数据库中随机取一个类目
    $category = \App\Models\Category::query()->where('is_directory', false)->inRandomOrder()->first();

    return [
        'title'        => $faker->word,
        'description'  => $faker->sentence,
        'image'        => $image,
        'on_sale'      => true,
        'rating'       => $faker->numberBetween(0, 5),
        'sold_count'   => 0,
        'review_count' => 0,
        'price'        => 0,
        // 将取出的类目 ID 赋给 category_id 字段
        // 如果数据库中没有类目则 $category 为 null，同样 category_id 也设成 null
        'category_id'  => $category ? $category->id : null,
    ];
});
