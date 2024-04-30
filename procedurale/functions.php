<?php

function fill(int $volume, int $capacity): ?int
{
    if ($volume <= $capacity) {
        return $capacity - $volume;
    }

    return null;
}

function drink(int $volume, int $capacity): ?int
{
    if ($volume >= $capacity) {
        return $capacity + $volume;
    }   

    return null;
}