<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::find(1);

        Page::truncate();
        
        $about = new Page([
            'title' => 'About',
            'url' => '/about',
            'content' => 'This is about us.'
        ]);

        $contact = new Page([
            'title' => 'Contact',
            'url' => '/contact',
            'content' => 'You contact us.'
        ]);

        $faq = new Page([
            'title' => 'FAQ',
            'url' => '/another-page',
            'content' => 'This is another page.'
        ]);

        $admin->pages()->saveMany([
            $about,
            $contact,
            $faq,
        ]);

        $about->appendNode($faq);
    }
}
