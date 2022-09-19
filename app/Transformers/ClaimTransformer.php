<?php

namespace App\Transformers;

use App\Models\ClaimEnq;
use League\Fractal\TransformerAbstract;


class ClaimTransformer extends TransformerAbstract
{
	public function transform(ClaimEnq $activity)
	{
		return [

			"user" => $activity->id,
		];
	}

	protected function created_task(ClaimEnq $activity)
	{
		return $activity->user->name . " created a task, " . $activity->subject->title;
	}

	protected function created_comment(ClaimEnq $activity)
	{
		return $activity->user->name . " left a comment on the task, " . $activity->subject->task->title;
	}
}