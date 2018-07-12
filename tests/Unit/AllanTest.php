<?php

namespace Tests\Unit;

use App\Post;
use App\Repositories\PostRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AllanTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

//    public function test_it_can_create_a_post()
//    {
//        $data = [
//            'title' => $this->faker->word,
//            'body' => $this->faker->text,
//            'user_id' => $this->faker->integer,
//        ];
//        $data = [
//            '_token' => csrf_token(),
//            'title' => 'some title',
//            'body' =>  'some body',
//            'user_id' => null,
//        ];

//        $postRepo = new PostRepository(new Post);
//        $post = $postRepo->createPost($data);

//        $this->post('/posts/store', $data);
//
//        dd('do we get here?');

//        $post = Post::first();

//        dd($post);

//        $this->assertInstanceOf(Post::class, $post);
//        $this->assertEquals($data['title'], $post->title);
//        $this->assertEquals($data['text'], $post->text);
//        $this->assertEquals($data['user_id'], $post->integer);
//    }

    /** @test */
    function it_can_get_post_by_id()
    {
        $postRepo = new PostRepository();

        $post = $postRepo->getOnePost(4);

        $this->assertInstanceOf(Post::class, $post);
        $this->assertEquals(1, $post->count());
    }

}
