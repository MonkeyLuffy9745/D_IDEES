<?php

namespace App\Filament\Resources\CommentairesResource\Pages;

use App\Filament\Resources\CommentairesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommentaires extends ListRecords
{
    protected static string $resource = CommentairesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
