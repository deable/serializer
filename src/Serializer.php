<?php

declare(strict_types=1);

namespace Deable\Serializer;

/**
 * Interface Serializer
 *
 * @package Deable\Serializer
 */
interface Serializer
{

	/**
	 * @param $item
	 * @return string
	 */
	public function encode($item): string;

	/**
	 * @param string $data
	 * @return mixed
	 */
	public function decode(string $data);

}
