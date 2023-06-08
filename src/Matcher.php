<?php
namespace Lubed\Matcher;

interface Matcher
{
	public function setRule(MatchRule $rule):void
	public function getRule():MatchRule;
	public function match(string $value,?array $result=NULL):bool;
}