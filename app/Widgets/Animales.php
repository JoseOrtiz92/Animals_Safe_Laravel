<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Animales extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Animal::count();
        $string = 'Animales';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-paw',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Animales',
                'link' => route('voyager.animales.index'),
            ],
            'image' => '../public/images/dogs.jpg',
        ]));
    }
}