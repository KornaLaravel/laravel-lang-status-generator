<?php

namespace LaravelLang\StatusGenerator\Processors;

use DragonCode\Support\Facades\Filesystem\File;
use DragonCode\Support\Facades\Helpers\Arr;
use LaravelLang\StatusGenerator\Facades\Services\Locales;
use LaravelLang\StatusGenerator\Services\Locales as LocalesService;

class Excludes extends Processor
{
    public function handle(): void
    {
        $source = $this->getSourceValues();

        foreach ($this->directories() as $locale) {
            $path = $this->getTargetFilename($locale);

            $target = $this->getLocaleExcludes($locale);

            $intersect = $this->compare($source, $target);

            ! empty($intersect) ? $this->store($path, $intersect) : $this->delete($path);
        }
    }

    protected function compare(array $source, array $target): array
    {
        return array_intersect($target, $source);
    }

    protected function delete(string $path): void
    {
        File::ensureDelete($path);
    }

    protected function store(string $path, array $values): void
    {
        $this->filesystem->store($path, $values, true);
    }

    protected function getSourceValues(): array
    {
        $result = [];

        foreach ($this->locales()->getSource() as $values) {
            $result = Arr::addUnique($result, $values);
        }

        return $result;
    }

    protected function getLocaleExcludes(string $locale): array
    {
        return $this->locales()->getExcludes($locale);
    }

    protected function locales(): LocalesService
    {
        return Locales::load($this->getSourcePath(), $this->getLocalesPath());
    }

    protected function getTargetFilename(string $locale): string
    {
        return $this->getLocalesPath($locale . '/_excludes.json');
    }
}
