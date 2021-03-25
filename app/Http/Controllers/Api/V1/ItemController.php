<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use LaravelJsonApi\Laravel\Http\Controllers\Actions;
use App\JsonApi\V1\Posts\PostCollectionQuery;
use App\JsonApi\V1\Items\ItemQuery;

class ItemController extends Controller
{

    use Actions\FetchMany;
    use Actions\FetchOne;
    use Actions\Store;
    use Actions\Update;
    use Actions\Destroy;
    use Actions\FetchRelated;
    use Actions\FetchRelationship;
    use Actions\UpdateRelationship;
    use Actions\AttachRelationship;
    use Actions\DetachRelationship;


    public function reading(ItemQuery $query): void
    {
    // do something...
    }

    // public function created(Item $post, ItemRequest $request, ItemQuery $query): void
    // {
    // // do something only on created...
    // }
}
