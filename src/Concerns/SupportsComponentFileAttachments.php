<?php

namespace MahdiMk\Forms\Concerns;

use MahdiMk\Forms\Components\Contracts\HasFileAttachments;
use MahdiMk\Forms\Components\Field;

trait SupportsComponentFileAttachments
{
    public function getComponentFileAttachmentUrl(string $statePath): ?string
    {
        foreach ($this->getComponents() as $component) {
            if ($component instanceof HasFileAttachments && $component instanceof Field && $component->getStatePath() === $statePath) {
                $attachment = $this->getLivewire()->getFormComponentFileAttachment($statePath);

                if (! $attachment) {
                    return null;
                }

                return $component->saveUploadedFileAttachment($attachment);
            }

            foreach ($component->getChildComponentContainers() as $container) {
                if ($container->isHidden()) {
                    continue;
                }

                if ($url = $container->getComponentFileAttachmentUrl($statePath)) {
                    return $url;
                }
            }
        }

        return null;
    }
}
