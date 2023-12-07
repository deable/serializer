<?php

declare(strict_types=1);

namespace Deable\Serializer;

/**
 * Class DefaultSerializer
 *
 * @package Deable\Serializer
 */
final class DefaultSerializer implements Serializer
{

	/**
	 * @param mixed $item
	 * @return string
	 */
	public function encode($item): string
	{
		return serialize($item);
	}

	/**
	 * @param string $data
	 * @return mixed
	 * @noinspection UnserializeExploitsInspection
	 */
	public function decode(string $data)
	{
		return unserialize($data);
	}

}
