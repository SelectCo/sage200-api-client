<?php
declare(strict_types=1);

namespace Selectco\SageApi\QueryBuilder;

use Selectco\SageApi\Exception\ODataInvalidArgumentException;

/**
 * To add query parameters to a request URL, append the question mark character (?) to the URL first. Each query
 * parameter is expressed as a key-value pair, and multiple query parameters must be separated by an ampersand
 * character (&).
 *
 * The Sage 200 API query parameters follow a subset of the OData standard (see table below). To learn more about the
 * OData Standard, visit http://www.odata.org/ or https://en.wikipedia.org/wiki/Open_Data_Protocol.
 *
 *
 * Combining Multiple Commands
 * It is possible to combine multiple OData commands within a request and create quite complex and insightful results.
 *
 * For example, you can filter on expanded entities. The following example expands the sales order on the customer but
 * only returns the customer name:
 *
 * /sop_orders/1388180?$expand=customer&$select=customer.name
 *
 * The $select command can also be applied to reduce the fields in both the parent and child entity, like in this example:
 *
 * /sop_orders/1388180?$expand=customer&$select=id,document_no,customer.id,customer.name
 *
 * Another example is to retrieve customer emails ordered by id, returning only the top 5:
 *
 * /customer_emails?$orderby=id&$top=5
 */
class SageODataBuilder
{
    private string $selectParameter = '$select=';
    private string $filterParameter = '';
    private string $orderByParameter = '';
    private string $topParameter = '';
    private string $skipParameter = '';
    private string $expandParameter = '';
    private string $countParameter = '';
    private string $metadataParameter = '';

    /**
     * /customers?$select=id,reference,name,short_name
     *
     * $select enables you to limit the fields returned within a collection request. This example will only return the
     * id, reference, name, and short_name fields.
     *
     * $select can be either a string or array.  Values of array are imploded into a comma separated string.
     * Parameters will be appended to select string if called previously.
     *
     * $select must be either a CSV string select('option1,option2,option3') or an array select(['option1', 'option2', 'option3'])
     * Any additional select requests will be added to previous requests.
     *
     * @param array|string $select
     * @return $this
     */
    public function select(array|string $select): self
    {
        if (is_array($select)) {
            $select = implode(',', $select);
        }

        if ($this->selectParameter !== '$select=') {
            $this->selectParameter .= ',';
        }
        $this->selectParameter .= $select;

        return $this;
    }

    /**
     * /customers?$filter=reference eq 'ACME01' or balance gt 1000
     * $filter returns only the entities that match the criteria set by the specified filter. This example request
     * returns the entities where the value of the reference field is equal to 'ACME01' or the value of the balance
     * field is greater than 1000. Note that clauses are combined with logical operators such as "and" or "or", and
     * values of type string should be in single quotes.
     *
     * The following features apply to Sage 200 Standard and versions of Extra/Professional released after July
     * 2017 only:
     *
     * The functions 'contains', 'startswith', and 'endswith' can be applied to strings. For example:
     *
     * /customers?$filter=contains(name, 'X')
     * /customers?$filter=startswith(telephone_area_code, '01')
     * /customers?$filter=endswith(reference, 'S')
     * Filters can be applied to date fields. For example:
     *
     * /sop_orders?$filter=document_date gt 2016-02-23
     * filter('document_date', 'gt', '2016-02-23')
     * /sop_orders?$filter=date_time_updated gt 2016-02-24T09:52:11.452Z
     * Note: when including the time, you must specify the UTC timezone (Z at the end as in the example).
     *
     * Filters can be applied to enum fields. For example:
     *
     * /sop_orders?$filter=document_status eq '2'
     * /sop_orders?$filter=document_status eq 'EnumDocumentStatusComplete'
     * Note: value must be inside single quote marks and must be either an int or enum value.
     *
     * Filters can be nested using brackets. For example:
     *
     * /sop_orders/?$filter=(document_date ge 2016-01-01 and document_date le 2016-12-31) or document_status eq '2'
     *
     * @param string $field
     * @param string $operator
     * @param string|int $value
     * @return $this
     * @throws ODataInvalidArgumentException
     */
    public function filter(string $field, string $operator, string|int $value): self
    {
        $this->isOperatorValid($operator);
        if (is_string($value)) {
            $value = "'" . $value . "'";
        }
        $this->filterParameter = '$filter=' . "{$field} {$operator} {$value}";

        return $this;
    }

    /**
     * @param string $field
     * @param string $operator
     * @param string|int $value
     * @return $this
     * @throws ODataInvalidArgumentException
     */
    public function andFilter(string $field, string $operator, string|int $value): self
    {
        $this->isOperatorValid($operator);
        if (is_string($value)) {
            $value = "'" . $value . "'";
        }
        if ($this->filterParameter === '') {
            $this->filterParameter = '$filter=' . "{$field} {$operator} {$value}";
        } else {
            $this->filterParameter .= " and {$field} {$operator} {$value}";
        }

        return $this;
    }

    /**
     * @param string $field
     * @param string $operator
     * @param string|int $value
     * @return $this
     * @throws ODataInvalidArgumentException
     */
    public function orFilter(string $field, string $operator, string|int $value): self
    {
        $this->isOperatorValid($operator);
        if (is_string($value) && $value !== 'null') {
            $value = "'" . $value . "'";
        }
        if ($this->filterParameter === '') {
            $this->filterParameter = '$filter=' . "{$field} {$operator} {$value}";
        } else {
            $this->filterParameter .= " or {$field} {$operator} {$value}";
        }

        return $this;
    }

    /**
     * see filter()
     *
     * This is a simple filter which only accepts a single filter string.  Using this method will overwrite
     * any existing filter created.
     *
     * @param string $filter
     * @return $this
     */
    public function simpleFilter(string $filter): self
    {
        $this->filterParameter = '$filter=' . $filter;

        return $this;
    }

    /**
     * /customers?$orderby=short_name asc
     *
     * $orderby enables you to return a collection in ascending or descending order. The order is based on the
     * specified field name and the keywords asc for ascending and desc for descending. This example orders the results
     * by the short_name field in ascending order.
     *
     * Calling this method multiple times will add additional orderby strings.
     * e.g. orderBy('id')->orderBy('name', 'desc') will output ?$orderby id asc, name desc
     *
     * @param string $field
     * @param string $order
     * @return $this
     */
    public function orderBy(string $field, string $order = 'asc'): self
    {
        if ($this->orderByParameter === '') {
            $this->orderByParameter = '$orderby=' . "{$field} {$order}";
        } else {
            $this->orderByParameter .= ", {$field} {$order}";
        }

        return $this;
    }

    /**
     * /customers?$orderby=id asc&$top=5
     *
     * $top returns the maximum number of JSON resources in a request. If the '$orderby' parameter is not specified,
     * then the default is used. When 'top' is not specified, the default value is 500. This example request returns
     * the first 5 JSON resources as a collection.
     *
     * For Sage 200 Standard and versions of Extra/Professional released after February 2019 only: The maximum value
     * that can be specified is 5000. Note: On certain large queries, this can take a long time or even time out.
     *
     * @param int $number
     * @return $this
     * @throws ODataInvalidArgumentException
     */
    public function top(int $number): self
    {
        if ($number > 5000) {
            throw new ODataInvalidArgumentException('The maximum value that can be specified for $top is 5000.');
        }
        $this->topParameter = '$top=' . $number;
        return $this;
    }

    /**
     * This feature applies to Sage 200 Standard and versions of Extra/Professional released after July 2017 only:
     *
     * /customers?$skip=25&$orderby=id asc
     * $skip requests that the number of items in the collection be skipped and not included in the result. The example
     * request returns customers starting with the 26th customer.
     *
     * Note: When using $skip, you must also use the $orderby parameter. Failure to do so will result in an error.
     *
     * @param int $number
     * @return $this
     */
    public function skip(int $number): self
    {
        $this->skipParameter = '$skip=' . $number;
        return $this;
    }

    /**
     * /customers?$expand=contacts
     * /customers?$expand=default_tax_code
     * /customers?$expand=main_address
     * /customers?$expand=country_code
     * /customers?$expand=currency
     *
     * $expand enables you to include child JSON resources that are linked to the parent JSON resource within your
     * results.
     *
     * $field must be either a CSV string expand('option1,option2,option3') or an array expand(['option1', 'option2', 'option3'])
     * Any additional select requests will be added to previous requests.
     *
     * @param array|string $field
     * @return $this
     */
    public function expand(array|string $field): self
    {
        if (is_array($field)) {
            $field = implode(',', $field);
        }

        $this->expandParameter = '$expand=' . $field;
        return $this;
    }

    /**
     * /customers?$count=true
     *
     * The $count returns the number of entities within the collection.
     *
     * @param bool $enable
     * @return $this
     */
    public function count(bool $enable = true): self
    {
        $this->countParameter = '$count=' . json_encode($enable);
        return $this;
    }

    /**
     * This feature applies to Sage 200 Standard and versions of Extra/Professional released after February 2019 only:
     *
     * /customers?$metadata=true
     *
     * $metadata returns the name, type, sort order, and sort ascending of the fields that can be returned in the
     * request.
     * Specifying "true" will return all metadata fields, including expandable fields.
     * Specifying "false" will return metadata fields, excluding expandable fields (arrays and objects).
     *
     * @param bool $enable
     * @return $this
     */
    public function metadata(bool $enable = true): self
    {
        $this->metadataParameter = '$metadata=' . json_encode($enable);
        return $this;
    }

    /**
     * @throws ODataInvalidArgumentException
     */
    public function buildQueryString(): string
    {
        $queryString = '?';
        if ($this->selectParameter !== '$select=')
        {
            $queryString .= $this->selectParameter;
        }
        if ($this->filterParameter !== '')
        {
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->filterParameter;
        }
        if ($this->orderByParameter !== '')
        {
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->orderByParameter;
        }
        if ($this->topParameter !== '')
        {
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->topParameter;
        }
        if ($this->skipParameter !== '')
        {
            if ($this->orderByParameter === '')
            {
                throw new ODataInvalidArgumentException('When using $skip, you must also use the $orderby parameter.');
            }
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->skipParameter;
        }
        if ($this->expandParameter !== '')
        {
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->expandParameter;
        }
        if ($this->countParameter !== '')
        {
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->countParameter;
        }
        if ($this->metadataParameter !== '')
        {
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->metadataParameter;
        }

        return $queryString;
    }

    /**
     * Simple query string for POST/PUT requests
     *
     * @return string
     */
    public function buildSingleObjectQueryString(): string
    {
        $queryString = '?';
        if ($this->selectParameter !== '$select=')
        {
            $queryString .= $this->selectParameter;
        }
        if ($this->expandParameter !== '')
        {
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->expandParameter;
        }
        if ($this->metadataParameter !== '')
        {
            if ($queryString !== '?')
            {
                $queryString .= '&';
            }
            $queryString .= $this->metadataParameter;
        }

        return $queryString;
    }

    /**
     * @param string $operator
     * @return void
     * @throws ODataInvalidArgumentException
     */
    private function isOperatorValid(string $operator): void
    {
        match ($operator) {
            'lt', 'eq', 'gt' => true,
            'le', 'ge', 'ne' => true,
            'and', 'or', 'not', 'has' => true,
            default => throw new ODataInvalidArgumentException('An unknown operator has been provided.'),
        };
    }
}