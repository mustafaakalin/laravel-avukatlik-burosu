<?php

namespace App\Filament\Resources\BlogPostResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentsRelationManager extends RelationManager
{
    protected static string $relationship = 'comments';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('blog_post_id')
                    ->required()
                    ->maxLength(255)
                    ->readOnly(),
                    Forms\Components\TextInput::make('author')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('blog_post_id')
            ->columns([
                Tables\Columns\TextColumn::make('blog_post_id'),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('content')
                    ->searchable()
                    ->sortable()
                    ->limit(20),
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
