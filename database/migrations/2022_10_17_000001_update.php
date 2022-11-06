<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('therapist', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->nullable()->comment('ユーザーID');
            $table->unsignedBigInteger('mise_id')->nullable()->comment('店ID');
            $table->string('business_name')->nullable()->comment('源氏名');
            $table->integer('business_age')->nullable()->comment('営業年齢');
            $table->string('3size')->nullable()->comment('3サイズ');
            $table->string('cup')->nullable()->comment('カップ数');
            $table->string('name')->nullable()->comment('本名');
            $table->string('yomi')->nullable()->comment('よみがな');
            $table->string('address')->nullable()->comment('住所');
            $table->string('tel')->nullable()->comment('電話番号');
            $table->string('mail')->nullable()->comment('メール');
            $table->string('line')->nullable()->comment('ラインID');
            $table->date('birthday')->nullable()->comment('誕生日');
            $table->date('joinday')->nullable()->comment('入店日');
            $table->string('kyc')->nullable()->comment('本人確認');
            $table->string('back_name')->nullable()->comment('バック');
            $table->text('memo')->nullable()->comment('メモ');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('kokyaku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('名前');
            $table->string('tel')->nullable()->comment('電話番号');
            $table->string('mail')->nullable()->comment('メール');
            $table->string('ng')->nullable()->comment('NGセラピID');
            $table->text('memo')->nullable()->comment('メモ');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('price', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('mise_id')->nullable()->comment('店ID');
            $table->string('name')->comment('メニュー名');
            $table->integer('price')->comment('料金');
            $table->integer('order')->comment('表示順');
            $table->string('type')->nullable()->comment('メニュータイプ');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('back', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('mise_id')->nullable()->comment('店ID');
            $table->unsignedBigInteger('price_id')->nullable()->comment('料金ID');
            $table->string('name')->comment('バック名');
            $table->boolean('onece')->nullable()->comment('一日一回');
            $table->integer('price')->nullable()->comment('バック額');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('yoyaku', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('mise_id')->nullable()->comment('店ID');
            $table->unsignedBigInteger('therapist_id')->nullable()->comment('セラピストID');
            $table->unsignedBigInteger('kokyaku_id')->nullable()->comment('顧客ID');
            $table->unsignedBigInteger('inputer_id')->nullable()->comment('入力者ID');
            $table->string('price_id_list')->nullable()->comment('コース');
            $table->string('back_id_list')->nullable()->comment('バック');
            $table->datetime('visit_day')->nullable()->comment('来店日');
            $table->boolean('shimei')->nullable()->comment('指名');
            $table->integer('waribiki')->nullable()->comment('割引');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('mise_id')->nullable()->comment('店ID');
            $table->string('name')->comment('ルーム名');
            $table->string('address')->comment('住所');
            $table->text('guide')->comment('案内');
        });

        Schema::create('room_use', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('room_id')->nullable()->comment('ルームID');
            $table->unsignedBigInteger('therapist_id')->nullable()->comment('セラピストID');
            $table->integer('pouch_start')->nullable()->comment('ポーチ朝一');
            $table->integer('pouch_end')->nullable()->comment('ポーチ最終');
            $table->string('clean')->nullable()->comment('掃除評価');
            $table->datetime('use_day')->nullable()->comment('使用日');
        });

    }

    public function down()
    {
        Schema::dropIfExists('therapist');
        Schema::dropIfExists('kokyaku');
        Schema::dropIfExists('price');
        Schema::dropIfExists('back');
        Schema::dropIfExists('yoyaku');
        Schema::dropIfExists('room');
        Schema::dropIfExists('room_use');
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