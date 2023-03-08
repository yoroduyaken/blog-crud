<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $param = [
        //     'title' => '『Seederとは』',
        //     'body' => 'Laravelは、シードクラスを使用してデータベースにデータをシード（種をまく、初期値の設定）する機能を持っています。すべてのシードクラスはdatabase/seedersディレクトリに保存します。デフォルトで、DatabaseSeederクラスが定義されています。このクラスから、callメソッドを使用して他のシードクラスを実行し、シードの順序を制御できます。',
        //     'user_id' => User::first()->id,
        // ];  
        // DB::table('blogs')->insert($param);
        Blog::factory()->count(25)->create();
    }
}
