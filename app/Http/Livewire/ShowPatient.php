<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class ShowPatient extends DataTableComponent
{

    public bool $columnSelect = true;
    public string $defaultSortColumn = 'sort';
    public bool $hideBulkActionsOnEmpty = true;


    public function columns(): array
    {
        return [
            Column::make('Firstame', 'firstname')
                ->sortable()
                ->searchable(),
            Column::make('Firstame', 'firstname')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Phone', 'phone')
                ->sortable(),
            Column::make('Gender', 'gender')
                ->sortable(),

            // Column::make('Actions')
            //     ->components([
            //         Link::make('Edit'),
            //         Link::make('Delete'),
            //     ]),
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }
}
