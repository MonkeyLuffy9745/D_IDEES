<?php

namespace App\Filament\Resources\CommentaireResource\Pages;

use App\Filament\Resources\CommentaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCommentaire extends ViewRecord
{
    protected static string $resource = CommentaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
