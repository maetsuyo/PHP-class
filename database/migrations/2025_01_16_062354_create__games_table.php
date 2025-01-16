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
    Schema::create('Games', function (Blueprint $table) {
      $table->id(); // ゲームID (主キー)
      $table->string('name'); // ゲーム名
      $table->text('description'); // ゲームの説明 (長いテキストが想定される場合)
      $table->decimal('price', 8, 2)->default(0); // ゲームの価格 ($表記、8桁まで、小数点以下2桁)
      $table->string('developer'); // 開発者の名前
      $table->decimal('rating', 3, 2)->nullable(); // ゲームの評価 (例: 4.5、10.0など)
      $table->unsignedBigInteger('download')->default(0); // ダウンロード数 (正の整数)
      $table->date('release_date')->nullable(); // リリース日 (日付形式)
      $table->timestamps(); // created_at と updated_at を自動生成
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('Games');
  }
};
