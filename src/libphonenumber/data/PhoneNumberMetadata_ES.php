<?php
  /* This file is automatically generated by {@link BuildMetadataPHPFromXml}.
   * Please don't modify it directly.
   */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[5-9]\\d{8}',
    'PossibleNumberPattern' => '\\d{9}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          8(?:
            [13]0|
            [28][0-8]|
            [47][1-9]|
            5[01346-9]|
            6[0457-9]
          )\\d{6}|
          9(?:
            [1238][0-8]\\d{6}|
            4[1-9]\\d{6}|
            5\\d{7}|
            6(?:
              [0-8]\\d{6}|
              9(?:
                0(?:
                  [0-57-9]\\d{4}|
                  6(?:
                    0[0-8]|
                    1[1-9]|
                    [2-9]\\d
                  )\\d{2}
                )|
                [1-9]\\d{5}
              )
            )|
            7(?:
              [124-9]\\d{2}|
              3(?:
                [0-8]\\d|
                9[1-9]
              )
            )\\d{4}
          )
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '810123456',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          (?:
            6\\d{6}|
            7[1-4]\\d{5}|
            9(?:
              6906(?:
                09|
                10
              )|
              7390\\d{2}
            )
          )\\d{2}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '612345678',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '[89]00\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '800123456',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '80[367]\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '803123456',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => '90[12]\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '901123456',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => '70\\d{7}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '701234567',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => '51\\d{7}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '511234567',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'ES',
  'countryCode' => 34,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '([5-9]\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [568]|
            [79][0-8]
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
/* EOF */