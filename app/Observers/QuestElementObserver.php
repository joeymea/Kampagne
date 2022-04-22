<?php

namespace App\Observers;

use App\Facades\Mentions;
use App\Models\QuestElement;

class QuestElementObserver
{
    /**
     * Purify trait
     */
    use PurifiableTrait;

    /**
     * @param QuestElement $questElement
     */
    public function saving(QuestElement $questElement)
    {
        $questElement->description = $this->purify(Mentions::codify($questElement->description));
        $questElement->role = $this->purify($questElement->role);
        $questElement->name = $this->purify($questElement->name);

        if (empty($questElement->visibility)) {
            $questElement->visibility = 'all';
        }
    }

    /**
     * @param QuestElement $questElement
     */
    public function creating(QuestElement $questElement)
    {
        $questElement->created_by = auth()->user()->id;
    }
}
