<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.ListTables][google.bigtable.admin.v2.BigtableTableAdmin.ListTables]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ListTablesResponse</code>
 */
class ListTablesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The tables present in the requested instance.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Table tables = 1;</code>
     */
    private $tables;
    /**
     * Set if not all tables could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The tables present in the requested instance.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Table tables = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * The tables present in the requested instance.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.Table tables = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Table[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\Table::class);
        $this->tables = $arr;

        return $this;
    }

    /**
     * Set if not all tables could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Set if not all tables could be returned in a single response.
     * Pass this value to `page_token` in another request to get the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

