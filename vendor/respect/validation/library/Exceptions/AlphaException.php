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

class AlphaException extends ValidationException
{
    const EXTRA = 1;

    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'Debería contener solo letras (a-z)', 
            self::EXTRA => 'Debería contener solo letras (a-z) y "{{additionalChars}}"',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'No debería contener solo letras (a-z)',
            self::EXTRA => 'No debería contener solo letras (a-z) o "{{additionalChars}}"',
        ],
    ];

    public function chooseTemplate()
    {
        return $this->getParam('additionalChars') ? static::EXTRA : static::STANDARD;
    }
}
