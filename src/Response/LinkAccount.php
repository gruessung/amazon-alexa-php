<?php

namespace Alexa\Response;


class LinkAccount
{
    public $type = 'LinkAccount';

    public function render()
    {
        return array(
            'type' => $this->type,
        );
    }
}