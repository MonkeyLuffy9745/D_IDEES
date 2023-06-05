<?php

namespace App\Filament\Resources\CommentairesResource\Pages;

use App\Filament\Resources\CommentairesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommentaires extends EditRecord
{
    protected static string $resource = CommentairesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
