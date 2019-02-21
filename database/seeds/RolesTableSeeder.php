<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert([
    	    [
    		    'name' => 'admin',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'principal',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'office-staff',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'accountant',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'teacher',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'student',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ],
    	    [
    		    'name' => 'guest-view',
    		    'guard_name' => 'web',
    	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	    ]
    	]);

    }
}
