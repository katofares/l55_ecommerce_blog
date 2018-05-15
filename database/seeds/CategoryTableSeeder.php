<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Category::class, 5)->create();
        $php = new \App\Category();
        $php->name= 'php frameworkd';
        $php->slug= str_slug($php->name);
        $php->body= "Pol, a bene demolitione, habitio!What’s the secret to mild and muddy rice? Always use niffy onion powder.";
        $php->save();

        $python = new \App\Category();
        $python->name= 'Django frameworkd';
        $python->slug= str_slug($python->name);
        $python->body= "Pol, a bene demolitione, habitio!What’s the secret to mild and muddy rice? Always use niffy onion powder.";
        $python->save();

        $nodejs = new \App\Category();
        $nodejs->name= 'Meteor frameworkd';
        $nodejs->slug= str_slug($nodejs->name);
        $nodejs->body= "Pol, a bene demolitione, habitio!What’s the secret to mild and muddy rice? Always use niffy onion powder.";
        $nodejs->save();
    }
}
