<?php

namespace RubenVanErk\ArtisanWindow\Traits;

use Closure;
use Symfony\Component\Console\Output\ConsoleSectionOutput;
use function Termwind\render;
use function Termwind\renderUsing;
use function Termwind\terminal;

trait HasWindows
{
    protected function window(string $title, int $maxHeight, Closure $callable): string
    {
        $width = min(terminal()->width(), 150);

        $originalOutput = $this->output->getOutput();

        render('<div class="text-center font-bold bg-green-700 w-'.$width.'">'.$title.'</div>');

        /** @var ConsoleSectionOutput $window */
        $window = $originalOutput->section();

        $window->setMaxHeight($maxHeight);

        $this->output = $window;
        renderUsing($window);

        $result = false;
        $startTime = microtime(true);

        try {
            $result = $callable();
        } finally {
            $this->output = $originalOutput;
            renderUsing($originalOutput);

            $runTime = number_format((microtime(true) - $startTime) * 1000).'ms';

            $resultColor = $result !== false ? 'text-green-500' : 'text-red-500';
            $resultText = $result !== false ? 'DONE' : 'FAIL';

            render(<<<HTML
                <div class="flex w-$width space-x-1">
                    <span class="flex-1 text-gray-300 content-repeat-[.]"></span>
                    <span class="text-gray-500">$runTime</span>
                    <span class="font-bold $resultColor">$resultText</span>
                </div>
            HTML);
        }

        return $window->getContent();
    }
}
