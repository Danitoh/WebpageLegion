&lt;?php

/* 
*  Character Transfer Price
*/
$config['cta_price'] = 10;

/* 
*  Character Transfer Price Currency
*  Usage:
*   - 'dp'
*   - 'vp'
*/
$config['cta_price_currency'] = 'dp';

/* 
*  Maximum characters per account
*/
$config['cta_characters_limit'] = 5;

/*
*  Language strings
*/
$config['cta_language'] = array(

'TITLE'    => 'Character transfer to another account',
'DESCRIPTION'   => 'This service allows Characters to be transfered,

'KEYWORDS'   => 'character,transfer,charactertransfer,account',
'REALM'    => 'Realm',
'CHARACTER'   => 'Character',
'DEST_ACC'   => 'Account destination',
'PLS_SELECT'   => 'Select a Character',
'TRANSFER'   => 'Transfer',
'DP'    => 'SpecialPoints (DP)',
'VP'    => 'VP',
'COST_EXPL'   => 'Transfer cost is <strong>[PRICE] [CURRENCY]</strong>.',
'SELECT_CHAR'   => 'Please select Character',
'ENTER_DEST_ACC'  => 'Please select the account destination',
'ERROR_REALM'   => 'Selected Realm is not valid',
'ERROR_CHARACTER' => 'Selected Character is not valid',
'ERROR_BELONGS'   => 'Your account does not belong to the selected character.',
'ERROR_ONLINE'   => 'Character selected is online. Please log out from the game and try again',

'ERROR_DEST_ACC'  => 'The destination account is not valid',
'ERROR_DEST_ME'   => 'Made account can not be the same destination account',

'ERROR_CHAR_LIMIT'=> 'Maximum transfer Characters it was reached ([LIMIT])',

'ERROR_PRICE_DP'  => 'Your have not enough DP in your inventory',
'ERROR_PRICE_VP'  => 'You don\'t have enough Vote Points.',

'ERROR_WEB_FAIL'  => 'Character transfer has not succeeded. Please try again',

'SUCCESS_MSG'   => 'The character <strong>[CHARACTER]</strong> from realm <strong>[REALM_NAME]</strong> has been successfully transferred to account <strong>[ACCOUNT]</strong>.',

'LINK_GO_UCP'   => 'Go to Control Panel',

'BANNED_MSG' => 'Your account is blocked'
);













/*******************************************************************/
/******************* DO NOT CHANGE BELOW ***************************/
/*******************************************************************/
$config['force_code_editor'] = true;