<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ModelHasRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$adminUserOne = User::find(1);
        $adminUserOne->assignRole('admin');
    	$adminUserTwo = User::find(2);
        $adminUserTwo->assignRole('admin');
    	$adminUserThree = User::find(3);
        $adminUserThree->assignRole('admin');

    	$principalUserOne = User::find(4);
        $principalUserOne->assignRole('principal');
    	$principalUserTwo = User::find(5);
        $principalUserTwo->assignRole('principal');
    	$principalUserThree = User::find(6);
        $principalUserThree->assignRole('principal');

    	$officeStaffUserOne = User::find(7);
        $officeStaffUserOne->assignRole('office-staff');
    	$officeStaffUserTwo = User::find(8);
        $officeStaffUserTwo->assignRole('office-staff');
    	$officeStaffUserThree = User::find(9);
        $officeStaffUserThree->assignRole('office-staff');

    	$accountantUserOne = User::find(10);
        $accountantUserOne->assignRole('accountant');
    	$accountantUserTwo = User::find(11);
        $accountantUserTwo->assignRole('accountant');
    	$accountantUserThree = User::find(12);
        $accountantUserThree->assignRole('accountant');

    	$teacherUserOne = User::find(13);
        $teacherUserOne->assignRole('teacher');
    	$teacherUserTwo = User::find(14);
        $teacherUserTwo->assignRole('teacher');
    	$teacherUserThree = User::find(15);
        $teacherUserThree->assignRole('teacher');
        
    	$studentUserOne = User::find(16);
        $studentUserOne->assignRole('student');
    	$studentUserTwo = User::find(17);
        $studentUserTwo->assignRole('student');
    	$studentUserThree = User::find(18);
        $studentUserThree->assignRole('student');

    	$guestViewUserOne = User::find(19);
        $guestViewUserOne->assignRole('guest-view');
    	$guestViewUserTwo = User::find(20);
        $guestViewUserTwo->assignRole('guest-view');
    	$guestViewUserThree = User::find(21);
        $guestViewUserThree->assignRole('guest-view');
    }
}
