<?php
  /* This file is automatically generated by {@link BuildMetadataPHPFromXml}.
   * Please don't modify it directly.
   */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[14]\\d{2,6}',
    'PossibleNumberPattern' => '\\d{3,7}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '[14]\\d{2,6}',
    'PossibleNumberPattern' => '\\d{3,7}',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '[14]\\d{2,6}',
    'PossibleNumberPattern' => '\\d{3,7}',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            16\\d{3}|
            87
          )
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '187',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '
          (?:
            12|
            4(?:
              [478]\\d{3,5}|
              55
            )
          )\\d{2}
        ',
    'PossibleNumberPattern' => '\\d{4,7}',
    'ExampleNumber' => '1254',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
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
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '11[2358]',
    'PossibleNumberPattern' => '\\d{3}',
    'ExampleNumber' => '112',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            0\\d{2,3}|
            1(?:
              [2-5789]|
              6000
            )|
            2\\d{2}|
            3[39]|
            4(?:
              82|
              9\\d{1,3}
            )|
            5(?:
              00|
              1[58]|
              2[25]|
              3[03]|
              44|
              [59]
            )|
            60|
            8[67]|
            9(?:
              [01]|
              2(?:
                [01]\\d{2}|
                [2-9]
              )|
              4\\d|
              696
            )
          )|
          4(?:
            2323|
            3(?:
              [01]|
              [45]\\d{2}
            )\\d{2}|
            [478](?:
              [0-4]|
              [5-9]\\d{2}
            )\\d{2}|
            5(?:
              045|
              5\\d{2}
            )
          )
        ',
    'PossibleNumberPattern' => '\\d{3,7}',
    'ExampleNumber' => '114',
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
  'id' => 'IT',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
/* EOF */