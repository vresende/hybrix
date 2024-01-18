<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\{Hash, Schema};

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('cpf')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('avatar');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'first_name' => 'admin',
            'last_name' => 'Fox Markerting',
            'email' => 'vini_handball@hotmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => '2024-01-02 17:04:58',
            'avatar' => 'avatar-1.jpg',
            'cpf' => '423.869.418-09',
            'remember_token' => bin2hex(random_bytes(20)),
            'created_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
