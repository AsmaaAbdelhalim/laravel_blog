<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use App\Models\PostView;
use App\Models\UpvoteDownvote;
use Filament\Widgets\Widget;

class PostOverview extends Widget
{
    protected int | string | array $columnSpan = 3;

    public ?Post $record = null;

    protected function getViewData(): array
    {
        return [
            'viewCount' => PostView::where('post_id', '=', $this->record->id)->count(),
            'upvotes' => UpvoteDownvote::where('post_id', '=', $this->record->id)->where('is_upvote', '=', 1)->count(),
            'downvotes' => UpvoteDownvote::where('post_id', '=', $this->record->id)->where('is_upvote', '=', 0)->count(),
        ];
    }

    protected static string $view = 'filament.widgets.post-overview';
}
