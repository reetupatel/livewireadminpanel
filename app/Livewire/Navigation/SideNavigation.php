<?php

namespace App\Livewire\Navigation;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class SideNavigation extends Component
{
    public function render()
    {
        return view('livewire.navigation.side-navigation',
    [
            'currentRoute' => Route::currentRouteName(),
        ]);
    }
}
