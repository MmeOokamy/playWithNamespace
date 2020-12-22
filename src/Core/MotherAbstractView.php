<?php


namespace PWN\Core;


abstract class MotherAbstractView
{
    /**
     * Squelette de la page html
     */
    final public function render()
    {
        $this->renderHead();
        $this->renderBody();
        $this->renderFooter();

    }

    /**
     * Render header
     */
    abstract protected function renderHead():void;

    /**
     * Render Body
     */
    abstract protected function renderBody():void;

    /**
     * Render Footer
     */
    abstract protected function renderFooter():void;

}