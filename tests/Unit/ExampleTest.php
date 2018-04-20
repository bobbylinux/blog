<?php

namespace Tests\Unit;

use App\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
class ExampleTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //given I have 2 records in the database that are post
        //and each one is posted a month apart.
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        //when I fetch the archives
        $posts = Post::archives();

        //dd($posts);
        //then the response should be in the proper format.
        $this->assertEquals([
            [
                'yeard' => $first->created_at->format('Y'),
                'monthd' => $first->created_at->format('F'),
                'published' => 1
            ],
            [
                'yeard' => $second->created_at->format('Y'),
                'monthd' => $second->created_at->format('F'),
                'published' => 1
            ]
            ],
            $posts);
    }
}
