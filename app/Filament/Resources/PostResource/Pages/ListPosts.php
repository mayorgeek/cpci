<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Filament\Resources\PostResource\Widgets\PostsOverview;
use App\Models\Post;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            PostsOverview::class,
        ];
    }

    protected function getTableQuery(): Builder
    {
        if (auth()->user()->isAdmin())
        {
            return Post::query()->orderBy('created_at', 'desc');    
        }

        return Post::query()
                        ->where('posted_by', auth()->user()->name)
                        ->orderBy('created_at', 'desc');
    }

}
