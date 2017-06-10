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
        // $this->call(UsersTableSeeder::class);
        
        

        DB::table('roles')->insert([

            [

                'name' => 'Admin',

            ],
            [

                'name' => 'Moderator',

            ],
            [

                'name' => 'Guest',

            ],

        ]);


        
        DB::table('permissions')->insert([

            [

                'name' => 'VIEW_ADMIN',

            ],
            [

                'name' => 'ADMIN_USERS',

            ]

        ]);
        DB::table('permission_role')->insert([

            [

                'role_id' => 1,
                'permission_id' => 1,

            ],
            [

                'role_id' => 1,
                'permission_id' => 2,

            ],
            [

                'role_id' => 2,
                'permission_id' => 1,

            ]

        ]);
        DB::table('categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Animal Products',
                'link'=> '/animal_products',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Automobile',
                'link'=> '/automobile',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Base Metals & Articles',
                'link'=> '/base_metals_&_articles',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Chemicals',
                'link'=> '/chemicals',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Computers & Software',
                'link'=> '/computers_&_software',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Construction',
                'link'=> '/construction',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Consumer Electronics',
                'link'=> '/electronics',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Energy & Environment',
                'link'=> '/energy_&_environment',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Fats & Oils',
                'link'=> '/fats_&_oils',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Food',
                'link'=> '/food',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Footwear & Headgears',
                'link'=> '/footwear_&_headgears',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Health & Beauty',
                'link'=> '/health_&_beauty',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Hides, Leather & Furs',
                'link'=> '/hides_leather_&_furs',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Home Supplies',
                'link'=> '/home_supplies',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Industrial Supplies',
                'link'=> '/industrial_supplies',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Machinery & Electronics',
                'link'=> '/machinery',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Mineral Products',
                'link'=> '/mineral_products',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Miscellaneous',
                'link'=> '/miscellaneous',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Plastics & Rubbers',
                'link'=> '/plastics',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Services',
                'link'=> '/services',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Stone, Glass & Jewelry',
                'link'=> '/stone_glass_&_jewelry',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Telecommunications',
                'link'=> '/telecommunications',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Textiles',
                'link'=> '/textiles',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Transportation',
                'link'=> '/transportation',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Vegetables',
                'link'=> '/vegetables',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Wood',
                'link'=> '/wood',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Animal Extracts',
                'link'=> '/animal_extracts',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 27,
                'name' => 'Beef Extract',
                'link'=> '/beef_extract',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 27,
                'name' => 'Beef Extract, Spinal Column Free',
                'link'=> '/beef_extract_spinal_column_free',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 27,
                'name' => 'Pork Extract',
                'link'=> '/pork_extract',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 27,
                'name' => 'Pork Extract',
                'link'=> '/pork_extract',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 27,
                'name' => 'Chicken Extract',
                'link'=> '/chicken_extract',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Aquaculture',
                'link'=> '/aquaculture',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Dairy, Eggs & Honey',
                'link'=> '/dairy_eggs_&_honey',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Farm Machines & Tools',
                'link'=> '/farm_machines_&_tools',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Fish & Crustaceans',
                'link'=> '/fish_&_crustaceans',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Fishery Machines',
                'link'=> '/fishery_machines',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Live Animals',
                'link'=> '/live_animals',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Meat & Edible Meats',
                'link'=> '/meat_&_edible_meats',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 1,
                'name' => 'Products Of Animals',
                'link'=> '/products_of_animals',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            
        ]);







    }
}
