<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>..
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Models;

/**
 * @property Contest $contest
 * @property int $contest_entry_id
 * @property int $contest_id
 * @property \Carbon\Carbon|null $created_at
 * @property ContestEntry $entry
 * @property int $id
 * @property \Carbon\Carbon|null $updated_at
 * @property User $user
 * @property int $user_id
 * @property float $weight
 */
class ContestVote extends Model
{
    public function entry()
    {
        return $this->belongsTo(ContestEntry::class);
    }

    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
