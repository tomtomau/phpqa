<?php

namespace Edge\QA\Tool;

class Pdepend extends Tool
{
    public function __invoke()
    {
        return array(
            'jdepend-xml' => $this->options->toFile('pdepend-jdepend.xml'),
            'summary-xml' => $this->options->toFile('pdepend-summary.xml'),
            'dependency-xml' => $this->options->toFile('pdepend-dependencies.xml'),
            'jdepend-chart' => $this->options->toFile('pdepend-jdepend.svg'),
            'overview-pyramid' => $this->options->toFile('pdepend-pyramid.svg'),
            'suffix' => $this->config->csv('extensions'),
            $this->options->ignore->pdepend(),
            $this->options->getAnalyzedDirs(',')
        );
    }
}