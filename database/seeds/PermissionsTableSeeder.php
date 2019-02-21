<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('permissions')->insert([
    	    [
    		    'name' => 'create',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'edit',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'delete',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'view',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ]
    	]);

    }
}
