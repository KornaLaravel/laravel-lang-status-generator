<?php

declare(strict_types=1);

namespace LaravelLang\StatusGenerator\Helpers\Translators;

use LaravelLang\Publisher\Constants\Locales;
use Stichoza\GoogleTranslate\GoogleTranslate as GT;

class GoogleTranslate extends Translator
{
    /**
     * @see https://cloud.google.com/translate/docs/languages
     *
     * @return array<string>
     */
    protected static function locales(): array
    {
        return [
            Locales::AFRIKAANS->value          => 'af',
            Locales::ALBANIAN->value           => 'sq',
            Locales::ARABIC->value             => 'ar',
            Locales::ARMENIAN->value           => 'hy',
            Locales::AZERBAIJANI->value        => 'az',
            Locales::BASQUE->value             => 'eu',
            Locales::BELARUSIAN->value         => 'be',
            Locales::BENGALI->value            => 'bn',
            Locales::BOSNIAN->value            => 'bs',
            Locales::BULGARIAN->value          => 'bg',
            Locales::CATALAN->value            => 'ca',
            Locales::CENTRAL_KHMER->value      => 'km',
            Locales::CHINESE->value            => 'zh-CN',
            Locales::CHINESE_HONG_KONG->value  => 'zh',
            Locales::CHINESE_T->value          => 'zh-TW',
            Locales::CROATIAN->value           => 'hr',
            Locales::CZECH->value              => 'cs',
            Locales::DANISH->value             => 'da',
            Locales::DUTCH->value              => 'nl',
            Locales::ESTONIAN->value           => 'et',
            Locales::FINNISH->value            => 'fi',
            Locales::FRENCH->value             => 'fr',
            Locales::GALICIAN->value           => 'gl',
            Locales::GEORGIAN->value           => 'ka',
            Locales::GERMAN->value             => 'de',
            Locales::GERMAN_SWITZERLAND->value => 'de',
            Locales::GREEK->value              => 'el',
            Locales::GUJARATI->value           => 'gu',
            Locales::HEBREW->value             => 'he',
            Locales::HINDI->value              => 'hi',
            Locales::HUNGARIAN->value          => 'hu',
            Locales::ICELANDIC->value          => 'is',
            Locales::INDONESIAN->value         => 'id',
            Locales::ITALIAN->value            => 'it',
            Locales::JAPANESE->value           => 'ja',
            Locales::KANNADA->value            => 'kn',
            Locales::KAZAKH->value             => 'kk',
            Locales::KOREAN->value             => 'ko',
            Locales::LATVIAN->value            => 'lv',
            Locales::LITHUANIAN->value         => 'lt',
            Locales::MACEDONIAN->value         => 'mk',
            Locales::MALAY->value              => 'ms',
            Locales::MARATHI->value            => 'mr',
            Locales::MONGOLIAN->value          => 'mn',
            Locales::NEPALI->value             => 'ne',
            Locales::NORWEGIAN_BOKMAL->value   => 'no',
            Locales::NORWEGIAN_NYNORSK->value  => 'no',
            // Locales::OCCITAN->value             => 'oc',
            Locales::PASHTO->value            => 'ps',
            Locales::PERSIAN->value           => 'fa',
            Locales::PILIPINO->value          => 'fil',
            Locales::POLISH->value            => 'pl',
            Locales::PORTUGUESE->value        => 'pt',
            Locales::PORTUGUESE_BRAZIL->value => 'pt',
            Locales::ROMANIAN->value          => 'ro',
            Locales::RUSSIAN->value           => 'ru',
            // Locales::SARDINIAN->value           => 'sc',
            Locales::SERBIAN_CYRILLIC->value => 'sr',
            // Locales::SERBIAN_LATIN->value       => 'sr-Latn',
            // Locales::SERBIAN_MONTENEGRIN->value => 'sr-Latn-ME',
            Locales::SINHALA->value        => 'si',
            Locales::SLOVAK->value         => 'sk',
            Locales::SLOVENIAN->value      => 'sl',
            Locales::SPANISH->value        => 'es',
            Locales::SWAHILI->value        => 'sw',
            Locales::SWEDISH->value        => 'sv',
            Locales::TAGALOG->value        => 'tl',
            Locales::TAJIK->value          => 'tg',
            Locales::THAI->value           => 'th',
            Locales::TURKISH->value        => 'tr',
            Locales::TURKMEN->value        => 'tk',
            Locales::UIGHUR->value         => 'ug',
            Locales::UKRAINIAN->value      => 'uk',
            Locales::URDU->value           => 'ur',
            Locales::UZBEK_CYRILLIC->value => 'uz',
            // Locales::UZBEK_LATIN->value         => 'uz-Latn',
            Locales::VIETNAMESE->value => 'vi',
            Locales::WELSH->value      => 'cy',
        ];
    }

    protected static function request(string $value, string $targetLocale, string $sourceLocale): string
    {
        return GT::trans($value, $targetLocale, $sourceLocale);
    }
}