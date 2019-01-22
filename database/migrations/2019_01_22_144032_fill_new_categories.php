<?php

use App\Category;
use Illuminate\Database\Migrations\Migration;

class FillNewCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Category::create(["name" => "Boucles"]);
        Category::create(["name" => "Clefs"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table("categories")->where("name", "Boucles")->delete();
        DB::table("categories")->where("name", "Clefs")->delete();
    }
}
