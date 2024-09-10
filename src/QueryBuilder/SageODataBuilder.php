<?php
declare(strict_types=1);

namespace Selectco\SageApi\QueryBuilder;

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

    public function filter(): self
    {
        return $this;
    }

    /**
     * /customers?$orderby=short_name asc
     *
     * $orderby enables you to return a collection in ascending or descending order. The order is based on the
     * specified field name and the keywords asc for ascending and desc for descending. This example orders the results
     * by the short_name field in ascending order.
     *
     * @param string $field
     * @param string $order
     * @return $this
     */
    public function orderBy(string $field, string $order = 'asc'): self
    {
        $this->orderByParameter = '$orderby=' . "{$field} {$order}";
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
     */
    public function top(int $number): self
    {
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
     * @param string $field
     * @return $this
     */
    public function expand(string $field): self
    {
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
        $this->countParameter = '$count=' . $enable;
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
        $this->metadataParameter = '$metadata=' . $enable;
        return $this;
    }

    public function buildQueryString(): string
    {
        $queryString = '?';
        if ($this->selectParameter !== '$select=')
        {
            $queryString .= $this->selectParameter;
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
}