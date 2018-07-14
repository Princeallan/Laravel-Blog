<?php

namespace Tests\Unit;

use App\Post;
use App\Repositories\PostRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AllanTest extends TestCase
{


    /** @test */
    function it_can_get_post_by_id()
    {
        $post = factory(Post::class)->create();
        dd($post);
        $postRepo = new PostRepository();
//
        $post = $postRepo->getOnePost(1);

        $this->assertInstanceOf(Post::class, $post);
//        $this->assertEquals(2, $post->count());

    }

}
