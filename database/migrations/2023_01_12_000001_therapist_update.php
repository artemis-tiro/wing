<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migrate時に実行
    public function up()
    {
        // 第二引数は固定
        // Schema::table('テーブル名', function (Blueprint $table))
        Schema::table('therapist', function (Blueprint $table) {

            // 作成されたテーブル->カラム名->どこに挿入するか->条件(nullを許容するなど)->コメント(必須)
            $table->string('height')->after('cup')->nullable()->comment('身長');
            
        });

    }

    // UPの分と対になるようにする(作成したなら消す)
    // ロールバック時に実行
    public function down()
    {
        Schema::table('therapist', function (Blueprint $table) {
            // 作成されたテーブル->カラムを削除(カラム名)
            $table->dropColumn('height');
        });
    }
};







/*テンプレ・ト



// 侏ｵъ・$table->bigInteger('unit_price')->change();

// カラム恬撹
public function up()
{
Schema::table('order_outsource', function (Blueprint $table) {
$table->string('document')->after('period')->nullable();
});
}

public function down()
{
Schema::table('order_outsource', function (Blueprint $table) {
$table->dropColumn('document');
});
}


//　クリエイト
public function up()
{
Schema::create('order_outsource', function(Blueprint $table)
{
$table->increments('id');
$table->string('project_id')->nullable();
$table->string('outsourcing_id')->nullable();
$table->string('pic_id')->nullable();
$table->bigInteger('pic_id')->nullable();
$table->integer('pic_id')->nullable();
$table->date('submit_day')->nullable();
$table->text('memo')->nullable();
$table->softDeletes();
$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
});
}

public function down()
{
Schema::dropIfExists('order_outsource');
}


// リネ・ム
$table->renameColumn('estimate_id', 'id');


// seed
DB::table('users')->insert([
'id' => 8,
'name' => "name",
'name2' => "name2",
'position' => "",
'email' => "a_yamakami@yamakamikensetsu.net",
'password' => Hash::make('yamaken'),
]);
DB::table('users')->insert([
'id' => 9,
'name' => "name",
'name2' => "name",
'position' => "",
'email' => "shimizume@yamakamikensetsu.net",
'password' => Hash::make('yamaken'),
]);

// コメント
$table->text('contract')->after('billing_base')->nullable()->comment('弐首ｻ・ﾌ嗤・);

＊ロ・ルバック
php artisan migrate:rollback --step=1

*
*/