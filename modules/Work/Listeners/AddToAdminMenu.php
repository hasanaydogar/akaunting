<?php

namespace Modules\Work\Listeners;

use App\Events\Menu\AdminCreated as Event;
use App\Traits\Permissions;

class AddToAdminMenu
{
    use Permissions;
    /**
     * Handle the event.
     *
     * @param  Event $event
     * @return void
     */
    public function handle(Event $event)
    {

        // Add new menu item
        $event->menu->add([
            'route' => ['work.loads.index', []],
            'title' => trans('work::general.name'),
            'icon' => 'fas fa-pen',
            'order' => 0
        ]);
    }
}
