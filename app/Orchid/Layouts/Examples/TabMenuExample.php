<?php

namespace App\Orchid\Layouts\Examples;

use Orchid\Screen\Actions\Menu;
use Orchid\Screen\Layouts\TabMenu;
use App\Http\Livewire\Admin\AdminDashboardComponent;


class TabMenuExample extends TabMenu
{
    /**
     * Get the menu elements to be displayed.
     *
     * @return Menu[]
     */
    protected function navigations(): iterable
    {
        return [
            Menu::make('Overview layouts')
                ->route('platform.example.layouts'),

            Menu::make('Get Started')
                ->route('platform.main'),

            Menu::make('System Settings')
                ->route('admin.dashboard'),

            // Menu::make('Example Screen')
            //     ->route('platform.example')
            //     ->badge(fn () => 6),
        ];
    }
}
