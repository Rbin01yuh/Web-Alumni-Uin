<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Permissions
        $permissions = [
            'manage-posts',
            'verify-users',
            'export-reports',
        ];
        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        $adminRole->givePermissionTo($permissions);
        $userRole->givePermissionTo(['manage-posts']);

        // Admin seed
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('Admin123!'),
                'nomor_kartu_mahasiswa' => 'ADM-000001',
                'tahun_lulus' => 2025,
                'email' => 'admin@example.com',
                'verified_by_admin' => true,
            ]
        );
        $admin->assignRole('admin');

        // Sample user
        $user = User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'Sample User',
                'password' => Hash::make('User123!'),
                'nomor_kartu_mahasiswa' => 'STU-000001',
                'tahun_lulus' => 2023,
                'verified_by_admin' => false,
            ]
        );
        $user->assignRole('user');
    }
}
