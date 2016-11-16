<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions;

class AlnumException extends AlphaException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'Debería contener solo letras (a-z) and dígitos (0-9)',
            self::EXTRA => 'Debería contener solo letras (a-z), dígitos (0-9) y {{additionalChars}}',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'No debería contener solo letras (a-z) o dígitos (0-9)',
            self::EXTRA => 'No debería contener solo letras (a-z), dígitos (0-9) o {{additionalChars}}',
        ],
    ];
}
