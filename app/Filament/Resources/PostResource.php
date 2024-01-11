<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;  
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Checkbox; 
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\FileUpload; 
use Filament\Forms\Components\RichEditor; 
use Filament\Tables\Columns\CheckboxColumn;
use App\Filament\Resources\PostResource\Pages;
use Filament\Forms\Components\DateTimePicker; 
use App\Filament\Resources\PostResource\RelationManagers;
use Illuminate\Database\Eloquent\SoftDeletingScope;      

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';
    protected static ?string $navigationGroup = 'News';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Mean Content')
                ->description('few words')
                ->schema([
                    TextInput::make('title')->live()->required()->minLength(3)->maxLength(150)
                    ->afterStateUpdated(function 
                    (string $operation, $state, Forms\Set $set){
                        if ($operation === 'edit') {
                            return;
                        }
                        $set('slug', Str::slug($state));
                        }
                ),
                    TextInput::make('slug')->required()->unique(ignoreRecord: true),  
                    RichEditor::make('body')->required()
                    ->fileAttachmentsDirectory('post/images')->columnSpanFull(),
                ])
                ->columns(2),
            Section::make('Meta')
                ->description('')
                ->schema([
                    FileUpload::make('image')->image()->directory('post/thumbnails'),
                    DateTimePicker::make('published_at')->nullable(),
                    Checkbox::make('featured'),
                    Select::make('user_id')->relationship('author','name')->searchable()->required(),
                    Select::make('categories')->multiple()->relationship('categories','title')->searchable()->required()
                ])
                // ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('image'),
            TextColumn::make('title')->sortable()->searchable(),
            TextColumn::make('slug')->sortable()->searchable(),
            TextColumn::make('author.name')->sortable()->searchable(),
            TextColumn::make('published_at')->date('Y-m-d')->sortable()->searchable(),
            CheckboxColumn::make('featured'),
        ])
        ->filters([
            Tables\Filters\TrashedFilter::make(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
            ]),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
