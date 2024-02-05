<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

$dishes = array(
    array(
        "name" => "Spaghetti Bolognese",
        "price" => 12.99,
        "description" => "Classic Italian pasta dish with a rich, savory meat sauce.",
       // "ingredients" => array("Ground beef", "Tomatoes", "Onions", "Garlic", "Herbs", "Parmesan cheese", "Spaghetti"),
       
    ),
    array(
        "name" => "Chicken Alfredo",
        "price" => 14.99,
        "description" => "Creamy Alfredo sauce tossed with grilled chicken and fettuccine pasta.",
      //  "ingredients" => array("Chicken breast", "Fettuccine", "Heavy cream", "Butter", "Garlic", "Parmesan cheese"),
       
    ),
    array(
        "name" => "Vegetarian Stir-Fry",
        "price" => 11.49,
        "description" => "Colorful mix of stir-fried vegetables in a soy-ginger sauce.",
      //  "ingredients" => array("Broccoli", "Bell peppers", "Carrots", "Snap peas", "Tofu", "Soy sauce", "Ginger"),
       
    ),
    array(
        "name" => "Margarita Pizza",
        "price" => 10.99,
        "description" => "Traditional thin-crust pizza topped with fresh tomatoes, mozzarella, and basil.",
      //  "ingredients" => array("Pizza dough", "Tomatoes", "Fresh mozzarella", "Basil", "Olive oil"),
        
    ),
    array(
        "name" => "Grilled Salmon Salad",
        "price" => 16.99,
        "description" => "Grilled salmon fillet on a bed of mixed greens with balsamic vinaigrette.",
     //   "ingredients" => array("Salmon", "Mixed greens", "Cherry tomatoes", "Cucumber", "Balsamic vinaigrette"),
        
    ),
    array(
        "name" => "Beef Tacos",
        "price" => 9.99,
        "description" => "Soft corn tortillas filled with seasoned ground beef, lettuce, cheese, and salsa.",
      //  "ingredients" => array("Ground beef", "Corn tortillas", "Lettuce", "Cheese", "Salsa"),
       
    ),
    array(
        "name" => "Vegetable Curry",
        "price" => 13.49,
        "description" => "A flavorful blend of vegetables in a coconut milk-based curry sauce.",
      //  "ingredients" => array("Mixed vegetables", "Coconut milk", "Curry spices", "Basmati rice"),
        
    ),
    array(
        "name" => "BBQ Pulled Pork Sandwich",
        "price" => 11.99,
        "description" => "Slow-cooked pulled pork in barbecue sauce, served on a toasted bun.",
      //  "ingredients" => array("Pulled pork", "Barbecue sauce", "Hamburger bun"),
       
    )
);



foreach ($dishes as $dish) {
  \App\Models\products::create([
      'name' => $dish['name'],
      'slug' => \Illuminate\Support\Str::slug($dish['name']),
      'description' => $dish['description'],
      // 'ingredients' => json_encode($dish['ingredients']), 
      'price' => $dish['price'],
  ]);
}

    }
}

     

