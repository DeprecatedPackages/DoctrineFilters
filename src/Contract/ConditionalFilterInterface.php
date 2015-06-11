<?php

/**
 * This file is part of Zenify
 * Copyright (c) 2012 Tomas Votruba (http://tomasvotruba.cz)
 */

namespace Zenify\DoctrineFilters\Contract;


interface ConditionalFilterInterface extends FilterInterface
{

	/**
	 * Resolves conditions that are required to enable filter.
	 * Filters are active by default.
	 *
	 * @return bool
	 */
	function isEnabled();

}
