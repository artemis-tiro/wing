<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('active')->after('password')->default(1)->comment('有効');
            $table->string('memo')->after('password')->nullable()->comment('メモ');
            $table->string('team')->after('password')->nullable()->comment('チーム');
            $table->softDeletes()->after('access_level');
        });
        Schema::create('inputer', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->nullable()->comment('ユーザーID');
            $table->string('name')->nullable()->comment('入力者名');
            $table->string('yomi')->nullable()->comment('よみがな');
            $table->string('address')->nullable()->comment('住所');
            $table->string('tel')->nullable()->comment('電話番号');
            $table->string('mail')->nullable()->comment('メール');
            $table->date('birthday')->nullable()->comment('生年月日');
            $table->date('joinday')->nullable()->comment('入社日');
            $table->string('kyc')->nullable()->comment('本人確認書類');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('client', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->nullable()->comment('ユーザーID');
            $table->string('name')->comment('代表者指名');
            $table->string('yomi')->nullable()->comment('よみがな');
            $table->string('address')->nullable()->comment('住所');
            $table->string('tel')->nullable()->comment('電話番号');
            $table->string('mail')->nullable()->comment('メール');
            $table->date('birthday')->nullable()->comment('生年月日');
            $table->date('joinday')->nullable()->comment('契約日');
            $table->string('kyc')->nullable()->comment('本人確認書類');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('mise', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('client_id')->comment('クライアント');
            $table->unsignedBigInteger('team_id')->comment('チーム');
            $table->string('name')->comment('店舗名前');
            $table->string('yomi')->nullable()->comment('よみがな');
            $table->string('area')->nullable()->comment('地域');
            $table->string('tel')->nullable()->comment('電話番号');
            $table->string('hp')->nullable()->comment('ホームページ');
            $table->string('memo')->nullable()->comment('メモ');
            $table->boolean('active')->default(1)->comment('有効');
            $table->text('hearing_sheet')->nullable()->comment('ヒアリングシート');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('active');
            $table->dropColumn('memo');
            $table->dropColumn('team');
            $table->dropColumn('deleted_at');
        });
        Schema::dropIfExists('inputer');
        Schema::dropIfExists('client');
        Schema::dropIfExists('mise');
    }
};







/*テンプレート



// 型変更
$table->bigInteger('unit_price')->change();

// カラム作成
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


// リネーム
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
$table->text('contract')->after('billing_base')->nullable()->comment('契約書の有無');

■ロールバック
php artisan migrate:rollback --step=1

*
*/