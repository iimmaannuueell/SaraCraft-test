<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class ShowUser extends Component
{
    // public bool $columnSelect = true;
    // public string $defaultSortColumn = 'sort';
    // public bool $hideBulkActionsOnEmpty = true;


    public function columns(): array
    {
        return [
            Column::make('Firstame', 'firstname')
                ->sortable()
                ->searchable(),
            Column::make('lastame', 'lastname')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return User::query();
    }
}
