<?php

namespace App\Events;

use App\Models\ClaimEnq;
use App\Transformers\ClaimTransformer;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ClaimEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $activity;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ClaimEnq $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('dashboard');
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->activity->id
        ];
    }
}