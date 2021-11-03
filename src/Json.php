<?php

namespace Tanthammar\Json;

class Json
{
    /**
     * Compile a PHP expression into a JavaScript object, array or single-quoted string.
     */
    public static function parse(mixed $expression, int $options = null, int $depth = 512): string
    {
        if (is_object($expression) || is_array($expression)) {
            $base64 = base64_encode(json_encode($expression, $options, $depth));

            return "JSON.parse(atob('{$base64}'))";
        }

        if (is_string($expression)) {
            return self::str($expression);
        }

        if (is_bool($expression)) {
            return self::bool($expression);
        }

        return self::encode($expression, $options, $depth);
    }

    /**
     * Compile the PHP statement into encoded JSON with double-quoted strings.
     */
    public static function encode(
        mixed $expression,
        int|string|null $options = JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT,
        int $depth = 512
    ): string
    {
        return json_encode($expression, $options, $depth);
    }

    /**
     * Compile a PHP boolean into JavaScript true/false.
     */
    public static function bool(bool $expression): string
    {
        return json_encode($expression);
    }

    /**
     * Compile a PHP string into JavaScript single-quoted string.
     */
    public static function str(string $expression): string
    {
        return "'".str_replace("'", "\'", str_replace('\\', '\\\\', $expression))."'";
    }
}
