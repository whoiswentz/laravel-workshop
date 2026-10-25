<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArtistsToFollow extends Component
{
    /** @var array<int, array{img: string, name: string}> */
    const array ARTISTS_TO_FOLLOW = [
        ['img' => 'alessia.png', 'name' => 'alessia_draws'],
        ['img' => 'anne.png', 'name' => 'just_anne'],
        ['img' => 'mr-anderson.png', 'name' => 'Mr. Anderson'],
        ['img' => 'michael.png', 'name' => 'Michael'],
    ];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.artists-to-follow', [
            'artists' => self::ARTISTS_TO_FOLLOW,
        ]);
    }
}
