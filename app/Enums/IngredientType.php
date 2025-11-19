<?php

namespace App\Enums;

enum IngredientType: string
{
    case Confection = 'confection';
    case Flour = 'flour';
    case Herb = 'herb';
    case Nut = 'nut';
    case Salt = 'salt';
    case Seed = 'seed';
    case Spice = 'spice';
    case Wet = 'wet';
}
