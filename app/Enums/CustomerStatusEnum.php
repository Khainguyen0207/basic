<?php

namespace App\Enums;

enum CustomerStatusEnum: string
{
    case ACTIVE = 'active';
    case LOCKED = 'locked';

    public function getLabel(): string
    {
        $label = match($this) {
            self::ACTIVE => 'Active',
            self::LOCKED => 'Locked',
        };

        return $label ?? '';
    }

    private function getColor(): string
    {
        $color = match($this) {
            self::ACTIVE => 'success',
            self::LOCKED => 'danger',
        };

        return $color ?? 'primary';
    }

    public function toHtml(): string
    {
        return $this->getDom($this->getLabel(), $this->getColor());
    }

    private function getDom(string $label, string $color): string
    {
        $color = 'badge badge-' . $color;

        return '<span class="' . $color . '">' . $label . '</span>';
    }
}
