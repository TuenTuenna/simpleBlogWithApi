<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // unsigned 빅 인티저로 외래키로 연결할 컬럼을 만들어 준다.
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('parent_id');
            $table->text('body');
            $table->timestamps();

            // 외래키로 제약을 걸어준다.
            $table->foreign('user_id')
                // user_id 는 users 테이블의 id 필드와 연동
                ->references('id')
                ->on('users')
                // users 테이블의 해당 아이디가 삭제가 되면 관련된 댓글들도 지워진다.
                ->onDelete('cascade');

            // 포스팅 부분도 외래키로 연결시켜준다.
            // 내 테이블의 post_id 컬럼 부분이
            $table->foreign('post_id')
                // posts 테이블의 id 컬럼과 연동 시킨다.
                ->references('id')
                ->on('posts')
                // posts 테이블의 해당 아이디가 삭제되면
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
