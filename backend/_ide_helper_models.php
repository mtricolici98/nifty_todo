<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\TodoItem
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $status
 * @property string|null $estimate
 * @property string|null $deadline
 * @property bool $reminder
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TodoItem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereEstimate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereReminder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TodoItem whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TodoItem withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\TodoItem withoutTrashed()
 */
	class TodoItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TodoItem[] $todos
 * @property-read int|null $todos_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

