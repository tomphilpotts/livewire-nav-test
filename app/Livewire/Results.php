<?php

namespace App\Livewire;

use Livewire\Component;

class Results extends Component
{

    public array $mappings = [
        'services' => [
            'Web Development',
            'SEO',
            'Graphic Design',
            'Branding'
        ],
        'price' => [
            '0-1000',
            '1000-2000',
            '2000-3000',
            '3000-4000',
            '4000-5000',
            '5000+'
        ],
    ];

    public array $filter = [
        'services' => [],
        'price' => [],
    ];

    protected array $queryString = [
        'filter' ,
    ];

    public array $results = [
        [
            'name' => 'Web Development',
            'price' => 3000,
            'featured' => true,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        [
            'name' => 'SEO',
            'price' => 4000,
            'featured' => false,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        [
            'name' => 'Graphic Design',
            'price' => 1000,
            'featured' => false,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        [
            'name' => 'Branding',
            'price' => 5000,
            'featured' => true,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
    ];


    public function render()
    {
        return view('livewire.results');
    }
}
