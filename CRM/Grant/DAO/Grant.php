<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Grant/Grant.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:13652dd0ca88b2b29b17df240790eece)
 */

/**
 * Database access object for the Grant entity.
 */
class CRM_Grant_DAO_Grant extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_grant';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique Grant id
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Contact ID of contact record given grant belongs to.
   *
   * @var int unsigned
   */
  public $contact_id;

  /**
   * Date on which grant application was received by donor.
   *
   * @var date
   */
  public $application_received_date;

  /**
   * Date on which grant decision was made.
   *
   * @var date
   */
  public $decision_date;

  /**
   * Date on which grant money transfer was made.
   *
   * @var date
   */
  public $money_transfer_date;

  /**
   * Date on which grant report is due.
   *
   * @var date
   */
  public $grant_due_date;

  /**
   * Yes/No field stating whether grant report was received by donor.
   *
   * @var boolean
   */
  public $grant_report_received;

  /**
   * Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.
   *
   * @var int unsigned
   */
  public $grant_type_id;

  /**
   * Requested grant amount, in default currency.
   *
   * @var float
   */
  public $amount_total;

  /**
   * Requested grant amount, in original currency (optional).
   *
   * @var float
   */
  public $amount_requested;

  /**
   * Granted amount, in default currency.
   *
   * @var float
   */
  public $amount_granted;

  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;

  /**
   * Grant rationale.
   *
   * @var text
   */
  public $rationale;

  /**
   * Id of Grant status.
   *
   * @var int unsigned
   */
  public $status_id;

  /**
   * FK to Financial Type.
   *
   * @var int unsigned
   */
  public $financial_type_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_grant';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'financial_type_id', 'civicrm_financial_type', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'grant_id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant ID'),
          'description' => 'Unique Grant id',
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_grant.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
        ],
        'grant_contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => 'Contact ID of contact record given grant belongs to.',
          'required' => TRUE,
          'export' => TRUE,
          'where' => 'civicrm_grant.contact_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'type' => 'EntityRef',
          ],
        ],
        'application_received_date' => [
          'name' => 'application_received_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Application received date'),
          'description' => 'Date on which grant application was received by donor.',
          'import' => TRUE,
          'where' => 'civicrm_grant.application_received_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
        ],
        'decision_date' => [
          'name' => 'decision_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Decision date'),
          'description' => 'Date on which grant decision was made.',
          'import' => TRUE,
          'where' => 'civicrm_grant.decision_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
        ],
        'grant_money_transfer_date' => [
          'name' => 'money_transfer_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Grant Money transfer date'),
          'description' => 'Date on which grant money transfer was made.',
          'import' => TRUE,
          'where' => 'civicrm_grant.money_transfer_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
        ],
        'grant_due_date' => [
          'name' => 'grant_due_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Grant Due Date'),
          'description' => 'Date on which grant report is due.',
          'import' => TRUE,
          'where' => 'civicrm_grant.grant_due_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
        ],
        'grant_report_received' => [
          'name' => 'grant_report_received',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Grant report received'),
          'description' => 'Yes/No field stating whether grant report was received by donor.',
          'import' => TRUE,
          'where' => 'civicrm_grant.grant_report_received',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
        ],
        'grant_type_id' => [
          'name' => 'grant_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant Type'),
          'description' => 'Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.',
          'required' => TRUE,
          'export' => TRUE,
          'where' => 'civicrm_grant.grant_type_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'grant_type',
            'optionEditPath' => 'civicrm/admin/options/grant_type',
          ]
        ],
        'amount_total' => [
          'name' => 'amount_total',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Total Amount'),
          'description' => 'Requested grant amount, in default currency.',
          'required' => TRUE,
          'precision' => [
            20,
            2
          ],
          'import' => TRUE,
          'where' => 'civicrm_grant.amount_total',
          'headerPattern' => '',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'amount_requested' => [
          'name' => 'amount_requested',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Amount Requested'),
          'description' => 'Requested grant amount, in original currency (optional).',
          'precision' => [
            20,
            2
          ],
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'amount_granted' => [
          'name' => 'amount_granted',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Amount granted'),
          'description' => 'Granted amount, in default currency.',
          'precision' => [
            20,
            2
          ],
          'import' => TRUE,
          'where' => 'civicrm_grant.amount_granted',
          'headerPattern' => '',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'currency' => [
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Grant Currency'),
          'description' => '3 character string, value from config setting or input via user.',
          'required' => TRUE,
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
          ]
        ],
        'rationale' => [
          'name' => 'rationale',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Grant Rationale'),
          'description' => 'Grant rationale.',
          'rows' => 4,
          'cols' => 60,
          'import' => TRUE,
          'where' => 'civicrm_grant.rationale',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
        ],
        'grant_status_id' => [
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant Status'),
          'description' => 'Id of Grant status.',
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_grant.status_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => FALSE,
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'grant_status',
            'optionEditPath' => 'civicrm/admin/options/grant_status',
          ]
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type'),
          'description' => 'FK to Financial Type.',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant',
          'entity' => 'Grant',
          'bao' => 'CRM_Grant_BAO_Grant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'grant', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'grant', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_grant_type_id' => [
        'name' => 'index_grant_type_id',
        'field' => [
          0 => 'grant_type_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_grant::0::grant_type_id',
      ],
      'index_status_id' => [
        'name' => 'index_status_id',
        'field' => [
          0 => 'status_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_grant::0::status_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
