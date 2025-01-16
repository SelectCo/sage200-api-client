<?php
declare(strict_types=1);

function getWarehouseId(): int
{
    if (getenv('SAGE200_API_TEST_GET_WAREHOUSE_ID')) {
        return (int)getenv('SAGE200_API_TEST_GET_WAREHOUSE_ID');
    }
    return 1;
}

function getProductId(): int
{
    if (getenv('SAGE200_API_TEST_GET_PRODUCT_ID')) {
        return (int)getenv('SAGE200_API_TEST_GET_PRODUCT_ID');
    }
    return 1;
}
function getCustomerId(): int
{
    if (getenv('SAGE200_API_TEST_GET_CUSTOMER_ID')) {
        return (int)getenv('SAGE200_API_TEST_GET_CUSTOMER_ID');
    }
    return 1;
}
function getPurchaseOrderId(): int
{
    if (getenv('SAGE200_API_TEST_GET_PURCHASE_ORDER_ID')) {
        return (int)getenv('SAGE200_API_TEST_GET_PURCHASE_ORDER_ID');
    }
    return 1;
}
function getWarehouseHoldingId(): int
{
    if (getenv('SAGE200_API_TEST_GET_WAREHOUSE_HOLDING_ID')) {
        return (int)getenv('SAGE200_API_TEST_GET_WAREHOUSE_HOLDING_ID');
    }
    return 1;
}
function getDeveloperSubscriptionKey(): string
{
    if (getenv('SAGE200_API_TEST_DEVELOPER_SUBSCRIPTION_KEY')) {
        return getenv('SAGE200_API_TEST_DEVELOPER_SUBSCRIPTION_KEY');
    }
    return '';
}
function getBearerToken(): string
{
    if (getenv('SAGE200_API_TEST_BEARER_TOKEN')) {
        return getenv('SAGE200_API_TEST_BEARER_TOKEN');
    }
    return '';
}
function getxSite(): string
{
    if (getenv('SAGE200_API_TEST_X_SITE')) {
        return getenv('SAGE200_API_TEST_X_SITE');
    }
    return '';
}
function getxCompany(): string
{
    if (getenv('SAGE200_API_TEST_X_COMPANY')) {
        return getenv('SAGE200_API_TEST_X_COMPANY');
    }
    return '';
}

function getCustomerData(): array
{
    return [
        'reference' => 'ABCD1234',
        'name' => 'Test Company Name'
    ];
}

function getBadCustomerData(): array
{
    return [
        'reference' => 'ABCDE12345',
        'name' => 'Test Company Name Which Exceeds The Limit of 60 Characters Long'
    ];
}

function getWarehouseData(): array
{
    return [
        'name' => 'Test Warehouse Name'
    ];
}

function getBadWarehouseData(): array
{
    return [
        'name' => 'Test Company Name Which Exceeds The Limit of 20 Characters Long'
    ];
}