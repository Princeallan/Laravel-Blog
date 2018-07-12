<?php

namespace Tests\Feature;

use App\Post;
use App\Repositories\PostRepository;
use App\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
//use App\Repositories\PostRepository;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AllanTest extends TestCase
{

    public function loginUser()
    {
        $user = factory(User::class)->create();

        Auth::login($user, true);

        return Auth::user();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testExample()
//    {
//        $this->assertTrue(true);
//    }


    public function test_it_can_create_a_post_dj()
    {
        $user = $this->loginUser();

        $data = [
            'title' => $this->faker->word,
            'body' => $this->faker->text,
            'user_id' => $user->id,
        ];
//        dd($data);
        $postRepo = new PostRepository();
        $post = $postRepo->create($data);

//        dd($post);
        $this->assertInstanceOf(Post::class, $post);
        $this->assertEquals($data['title'], $post->title);
        $this->assertEquals($data['body'], $post->body);
        $this->assertEquals($data['user_id'],$user->id);
    }

}
