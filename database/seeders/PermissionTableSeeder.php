<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

  

class PermissionTableSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $permissions = [

           'role-list',

           'role-create',

           'role-edit',

           'role-delete',
           'role-show',

           'User Mangement',
           'edit User',
           'creat User',
          'show User',
           'delete User',

           'Categories Mangement',
           'create Category',
           'delete Categories',
           'show Category',
           'edit Category', 

          'SubCategories Mangement',
           'Edit Subcategories',
           'create Subcategories',
           'show Subcategory',
           'delete Subcategory',

           'ProductCategory Mangement',
           'Edit ProductCategory',
           'create ProductCategory',
           'show ProductCategory',
           'delete ProductCategory',


           
           'stores Mangement',
           'create store',
           'delete store',
           'show store',
           'edit store', 
           'Mystore Mangement',
           'create Mystore',
           'show Mystore',
           'edit Mystore',
           'delete Mystore',
           "view-Store-active",
             'select thems',
           "view-Store-all",


           'Product Mangement',
           'Edit Product',
           'create Product',
           'show Product',
           'delete Product',


    


    

        ];

      

        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}
