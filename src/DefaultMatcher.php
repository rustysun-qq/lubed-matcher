<?php
namespace Lubed\Matcher;

class DefaultMatcher implements Matcher
{
	private $rule;

	public function setRule(MatchRule $rule):void
	{
		$this->rule = $rule;
	}

	public function getRule():MatchRule
	{
		return $this->rule;
	}

    public function match(string $value,?array $result=NULL):bool {
        return preg_match($this->rule->getPattern(), $value, $result);
    }
}
