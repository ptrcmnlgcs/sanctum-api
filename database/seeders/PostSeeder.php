<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'description' => 'A young wizard\'s journey begins.',
            'user_id' => 1, 
        ]);

        Post::create([
            'title' => 'To Kill a Mockingbird',
            'description' => 'A story of racial injustice.',
            'user_id' => 2, 
        ]);

        Post::create([
            'title' => 'The Great Gatsby',
            'description' => 'A story of love and wealth.',
            'user_id' => 3, 
        ]);

        Post::create([
            'title' => '1984',
            'description' => 'A dystopian novel about surveillance.',
            'user_id' => 1, 
        ]);

        Post::create([
            'title' => 'Moby Dick',
            'description' => 'A quest for revenge against a white whale.',
            'user_id' => 1, 
        ]);

        Post::create([
            'title' => 'War and Peace',
            'description' => 'A historical novel set during the Napoleonic Wars.',
            'user_id' => 3, 
        ]);

        Post::create([
            'title' => 'Pride and Prejudice',
            'description' => 'A romantic novel about manners.',
            'user_id' => 2, 
        ]);

        Post::create([
            'title' => 'The Catcher in the Rye',
            'description' => 'A story about teenage rebellion.',
            'user_id' => 2, 
        ]);

        Post::create([
            'title' => 'The Hobbit',
            'description' => 'A fantasy novel about a hobbit\'s adventure.',
            'user_id' => 3, 
        ]);

        Post::create([
            'title' => 'Fahrenheit 451',
            'description' => 'A dystopian novel about book burning.',
            'user_id' => 1, 
        ]);
    }
}
