<?php
namespace DrdPlus\Codes\Partials;

use Granam\Number\NumberInterface;
use Granam\Number\Tools\ToNumber;

/**
 * @method static TranslatableCode getIt($codeValue)
 */
abstract class TranslatableCode extends AbstractCode implements Translatable
{

    /**
     * @param string $languageCode
     * @param int|NumberInterface $amount
     * @return string
     */
    public function translateTo(string $languageCode, $amount = 1): string
    {
        $code = $this->getValue();
        $translations = $this->getTranslations($languageCode);
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        $plural = $this->convertAmountToPlural(ToNumber::toNumber($amount));
        if (($translations[$code][$plural] ?? null) !== null) {
            return $translations[$code][$plural];
        }
        if ($plural === 'few_decimal') {
            $plural = 'few';
            if (($translations[$code][$plural] ?? null) !== null) {
                return $translations[$code][$plural];
            }
        }
        if ($languageCode === 'en') {
            return str_replace('_', ' ', $code); // just replacing underscores by spaces
        }
        trigger_error(
            "Missing translation for value '{$code}', language '{$languageCode}' and plural '{$plural}'"
            . ', english will be used instead',
            E_USER_WARNING
        );
        $translations = $this->getTranslations('en');
        if (($translations[$code][$plural] ?? null) !== null) {
            return $translations[$code][$plural]; // explicit english translation
        }

        return str_replace('_', ' ', $code); // just replacing underscores by spaces
    }

    /**
     * @param number $amount
     * @return string
     */
    private function convertAmountToPlural($amount): string
    {
        $amount = abs($amount);
        if ((float)$amount === 1.0) {
            return 'one';
        }
        if ($amount < 5) {
            if (strpos((string)$amount, '.') !== false) {
                return 'few_decimal';
            }

            return 'few';
        }

        return 'many';
    }

    /**
     * @param string $languageCode
     * @return array|string[]
     */
    abstract protected function getTranslations(string $languageCode): array;
}