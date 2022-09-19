<?php

namespace App;

//use App\Events\ActivityLogged;

use App\Events\ClaimEvent;
use App\Models\ClaimEnq;
use ReflectionClass;

trait RecordClaim
{
    /**
     * Register the necessary event listeners.
     *
     * @return void
     */
    protected static function bootRecordsClaim()
    {
        foreach (static::getModelEvents() as $event) {
            static::$event(function ($model) use ($event) {
                $model->recordClaim($event);
            });
        }
    }

    /**
     * Record activity for the model.
     *
     * @param  string $event
     * @return void
     */
    public function recordClaim($event)
    {
        $activity = ClaimEnq::create([
            'subject_id' => $this->id,
            'subject_type' => get_class($this),
            'name' => $this->getActivityName($this, $event),
            'user_id' => $this->user_id
        ]);

        event(new ClaimEvent($activity));
    }

    /**
     * Prepare the appropriate activity name.
     *
     * @param  mixed  $model
     * @param  string $action
     * @return string
     */
    protected function getActivityName($model, $action)
    {
        $name = strtolower((new ReflectionClass($model))->getShortName());

        return "{$action}_{$name}";
    }

    /**
     * Get the model events to record activity for.
     *
     * @return array
     */
    protected static function getModelEvents()
    {
        if (isset(static::$recordEvents)) {
            return static::$recordEvents;
        }

        return [
            'created', 'deleted', 'updated'
        ];
    }
}
