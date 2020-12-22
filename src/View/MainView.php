<?php


namespace PWN\View;


use PWN\Core\MotherAbstractView;

class MainView extends MotherAbstractView
{
    /**
     * @var array $templates List of templates to display inside body
     * @var array $variables Associative array matchin variables names to values
     */
    protected array $templates;
    protected array $variables;

    /**
     * Create new standard view
     *
     * @param array $templates List of templates to display inside body
     * @param array $variables Associative array matching variables names to values
     */
    public function __construct(array $templates, array $variables = [])
    {
        $this->templates = $templates;
        $this->variables = $variables;
    }

    protected function renderHead(): void
    {
        // TODO: Implement renderHead() method.
    }

    protected function renderBody(): void
    {
        // TODO: Implement renderBody() method.
    }

    protected function renderFooter(): void
    {
        // TODO: Implement renderFooter() method.
    }
}