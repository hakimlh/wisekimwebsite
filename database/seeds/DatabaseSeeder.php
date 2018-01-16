<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class,10)->create()->each(function($user){
        $user->profile()->save(factory(App\Profile::class)->make());
      });

      factory(App\Tag::class,10)->create();

      factory(App\Article::class,100)->create()->each(function($article){

        $boolean =random_int(0,1);
        $ids = range(1,10);
        shuffle($ids);
        if ($boolean) {

          $sliced = array_slice($ids,0,2);

          $article->tags()->attach($sliced);
        } else
          $article->tags()->attach(array_rand($ids,1));




      });



        // $this->call(UsersTableSeeder::class);
    }
}
