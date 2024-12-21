<?php

namespace App\PositionTable;

use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;

trait Actions
{
    private function getActions(): array
    {
        return [
            EditAction::make()
                ->modalHeading('Ubah Data Jabatan')
                ->form([
                    Select::make('member_id')
                        ->label('Nama')
                        ->required()
                        ->native(false)
                        ->relationship(name: 'member', titleAttribute: 'name')
                        ->preload()
                        ->searchable(['name']),
                ]),
        ];
    }
}
