<?php

namespace Makeable\QueryKit\Builder;

use Makeable\QueryKit\Contracts\OrConstraint;
use Makeable\QueryKit\Contracts\QueryConstraint;

class OrWhere extends Where implements QueryConstraint, OrConstraint
{
}
