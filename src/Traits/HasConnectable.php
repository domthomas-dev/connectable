<?php


namespace Thomasdominic\Connectable\Traits;


use Illuminate\Database\Eloquent\Relations\MorphTo;

trait HasConnectable
{

    public function connectable(): MorphTo
    {
        return $this->morphTo();
    }
}
