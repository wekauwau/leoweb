<?php

namespace App\Livewire;

use App\Models\Position;
use App\PositionTable\Actions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;

class PositionData extends Component implements HasForms, HasTable
{
    use Actions;
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Position::query()->whereNotNull('executive_id')->with('executive', 'member'))
            ->columns([
                TextColumn::make('executive.name')
                    ->label('Jabatan'),
                TextColumn::make('member.name')
                    ->label('Nama'),
            ])
            ->actions($this->getActions());
    }

    public function render()
    {
        return view('livewire.filament-table');
    }
}
