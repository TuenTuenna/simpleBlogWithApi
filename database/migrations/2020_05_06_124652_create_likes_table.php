<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            // 누가 댓글을 달았는지
            $table->unsignedBigInteger('user_id');
            // 해당 포스팅에 댓글이 달렸는지
            $table->unsignedBigInteger('post_id');
            // 좋아요 여부
            // ​softDeletes가 deleted_at 만들어줘요
            // 그래서 데이터베이스에서 지우지는 않고
            // ​지운 시간을 저장하고
            // eloquent로 부를때는 제외해요
            // ​데이터는 실제로 가지고 있습니다! 코지코더님 짱짱!!!!
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
