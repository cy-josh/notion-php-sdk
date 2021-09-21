<?php namespace Notion\Properties;

use Notion\PropertyBase;

class Relation extends PropertyBase
{
    public function value()
    {
        return $this->config->relation->id;
    }

    public function set($value): void
    {

        if (!is_array($this->config->relation)) {

            $this->config->relation = [];

            $this->config->relation[] = (object) [
                'id' => $value
            ];

            return;
        }

    }
    public function getValue()
    {
        if (!is_array($this->config->relation)) {
            return null;
        }
        return $this->config->relation;
    }
}
