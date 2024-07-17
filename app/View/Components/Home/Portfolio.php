<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind CSS', 'React', 'Inertia', 'Testing'],
                'title' => 'Full Stack Clinical Trial App w/ React, Inertia, Laravel, PHPUnit',
                'image' => url('/img/medical-trials-app.png'),
                'github' => 'https://medicaltrials.hugosuarez.com/'
            ],
            // [
            //     'category' => ['Laravel', 'Tailwind CSS', 'Vue.js'],
            //     'title' => 'Full Stack Team Management app with Laravel, Tailwind CSS, and Vue.js',
            //     'image' => url('/img/team-management-app.png'),
            //     'github' => 'https://github.com/HugoSuarezJr/team-management-app'
            // ],
            [
                'category' => ['Javascript'],
                'title' => 'Fun JavaScript Game with HTML Canvas',
                'image' => url('/img/cure-quest-app.png'),
                'github' => 'https://github.com/HugoSuarezJr/CureDemo'
            ],

            /** Finish creating this app */
            [
                'category' => ['Laravel', 'Tailwind CSS', 'Vue.js', 'Inertia', 'Testing', 'PHP'],
                'title' => 'Full Stack CRM with Laravel, Tailwind CSS, Vue, Inertia, PEST',
                'image' => url('/img/pingcrm-app.png'),
                'github' => 'https://github.com/HugoSuarezJr/pingcrm'
            ],
            [
                'category' => ['Laravel', 'PHP'],
                'title' => 'Product Stock tracker app built on Laravel and PHP Blade',
                'image' => url('/img/in-stock-app.png'),
                'github' => 'https://github.com/HugoSuarezJr/In-Stock-App'
            ],

            /** Remake this app and make your own */
            // [
            //     'category' => ['Laravel', 'Tailwind CSS', 'PHP'],
            //     'title' => 'Task and project manager using Laravel framework',
            //     'image' => url('/img/birdboard-app.png'),
            //     'github' => 'https://github.com/HugoSuarezJr/birdboard'
            // ],
            [
                'category' => ['Laravel', 'PHP', 'Tailwind CSS'],
                'title' => 'Full Stack Blog with Laravel, PHP, Tailwind CSS',
                'image' => url('/img/laravel-blog-app.png'),
                'github' => 'https://github.com/HugoSuarezJr/Laravel-Blog'
            ]

        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
