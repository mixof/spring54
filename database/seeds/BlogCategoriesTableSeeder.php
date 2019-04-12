<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[];

        $category_name="No Category";
        $categories[]=[
            'name'=>$category_name,
            'slug'=> \Illuminate\Support\Str::slug($category_name),
            'parent_id'=>0
        ];

        for ($i=1; $i<=10; $i++)
        {
          $category_name="Category #".$i;
          $parent_id=($i>4)?rand(1,4):1;

          $categories[]=[
              'name'=> $category_name,
              'slug'=> \Illuminate\Support\Str::slug($category_name),
              'parent_id'=>$parent_id
          ];
        }

        \Illuminate\Support\Facades\DB::table('blog_categories')->insert($categories);
        //
    }
}
