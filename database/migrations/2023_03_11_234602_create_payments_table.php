<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Parking\Payment;
use App\Models\System\User;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Payment::class);
            $table->foreignIdFor(User::class, 'cashier_user_id');
            $table->decimal('amount', 9, 4);
            $table->decimal('amount_paid', 9, 4);
            $table->decimal('penalty_amount', 9, 4);
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
