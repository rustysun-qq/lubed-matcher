<?php
namespace Lubed\Mathcer\Rules;

use Lubed\Matcher\MatchRule;

final class NameMatchRule implements MatchRule
{
	private $pattern;

	public function __construct(string $pattern)
	{
		$this->init($pattern);
	}

	public function getPattern():string
	{
        return sprintf('/%s/i', $this->pattern);
	}

	private function init(string $pattern):void {
		$replaces = [
            '*' => '.*',
            '.' => '\.',
            '+' => '.+',
            '/' => '\/',
        ];

        $this->pattern = strtr($pattern, $replaces);
	}
}
