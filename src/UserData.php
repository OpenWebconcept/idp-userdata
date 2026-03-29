<?php

namespace OWC\IdpUserData;

abstract class UserData
{
    protected array $data;

    public function __construct(array $data) {
        $classVars = get_class_vars(static::class);

        $data = wp_parse_args($data, $classVars);
        $data = wp_array_slice_assoc($data, array_keys($classVars));

        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }
}