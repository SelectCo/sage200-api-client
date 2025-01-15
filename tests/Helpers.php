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