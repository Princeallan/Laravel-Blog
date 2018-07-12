<?php

namespace Tests\Unit;

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

    public function it_can_create_a_post()
    {
        $data = [
            'title' => $this->faker->word,
            'body' => $this->faker->text,
            'user_id' => $this->faker->integer,
        ];

        $postRepo = new PostRepository(new Post);
        $post = $postRepo->createPost($data);

        $this->assertInstanceOf(Post::class, $post);
        $this->assertEquals($data['title'], $post->title);
        $this->assertEquals($data['text'], $post->text);
        $this->assertEquals($data['user_id'], $post->integer);
    }

}
