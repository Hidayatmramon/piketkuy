    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->enum('role', ['admin','user','pj'])->default('user');   
                $table->string('name');
                $table->string('nis', 8);
                $table->string('rayon')->nullable();
                $table->string('namapj')->nullable();
                $table->string('ruang')->nullable();
                $table->string('hari')->nullable();
                $table->string('piket')->nullable();
                $table->timestamp('nis_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('users');
        }
    };
