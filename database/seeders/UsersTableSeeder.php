<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Log;
use Illuminate\Support\Facades\Artisan;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();
        $data = [
            ['name' => 'PRAMANA YUDA', 'username' => '199407292022031002', 'email' => '199407292022031002@kemenag.go.id', 'password' => Hash::make('1000kali'), 'plain_password' => '1000kali', 'current_role_id' => 1, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now(), 'id_kabkota' => 0],
            ['name' => 'AFNIZON', 'username' => '197610182009011004', 'email' => '197610182009011004@kemenag.go.id', 'password' => Hash::make('4fn1z0n123'), 'plain_password' => '4fn1z0n123', 'current_role_id' => 2, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now(), 'id_kabkota' => 0],
            // Admin Daerah
        ];
        foreach ($data as $key => $item) {
            \App\Models\User::firstOrCreate(
                ['username' => $item['username']],
                $item
            );
        }
    }
}