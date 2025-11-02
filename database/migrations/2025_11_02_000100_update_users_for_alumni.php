<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nomor_kartu_mahasiswa')->unique()->after('name');
            $table->unsignedSmallInteger('tahun_lulus')->after('email');
            $table->string('fakultas')->nullable()->after('tahun_lulus');
            $table->string('jurusan')->nullable()->after('fakultas');
            $table->text('alamat')->nullable()->after('jurusan');
            $table->string('phone')->nullable()->after('alamat');
            $table->string('linkedin')->nullable()->after('phone');
            $table->string('cv_path')->nullable()->after('linkedin');
            $table->json('privacy_settings')->nullable()->after('cv_path');
            $table->boolean('verified_by_admin')->default(false)->after('email_verified_at');

            // Fortify two-factor fields
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->timestamp('two_factor_confirmed_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'nomor_kartu_mahasiswa',
                'tahun_lulus',
                'fakultas',
                'jurusan',
                'alamat',
                'phone',
                'linkedin',
                'cv_path',
                'privacy_settings',
                'verified_by_admin',
                'two_factor_secret',
                'two_factor_recovery_codes',
                'two_factor_confirmed_at',
            ]);
        });
    }
};