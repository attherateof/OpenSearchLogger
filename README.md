⚠️ **NOTICE:** Use [LogstashWrapper](https://github.com/attherateof/LogstashWrapper) instead of this repository.

# Magento 2 Module - MageStack_OpenSearchLogger
    ``magestack/module-opensearchlogger``

## Main Functionalities
This Magento 2 module provides a mechanism to store a copy of your application logs into a secondary store (e.g., Elasticsearch/OpenSearch), enabling faster and more convenient log searching, filtering, and analysis — directly from logs emitted by Magento.

### Key Features
- Captures and mirrors Magento logs in realtime (error, warning, debug, etc.)
- Enhances observability and supports real-time debugging
- Structured log storage for easy querying and statistics
- Admin configuration options to control log levels and log storage behavior
- Monthly log rotation to manage log size and retention
- Remove old logs automatically after a six month period

### Use Cases
- Quickly search and analyze logs without digging through files
- Generate usage or error statistics for monitoring
- Investigate application behavior via structured context and extra data

### Performance & Scalability
- Recommended for small to medium traffic applications
- For high-traffic applications, it is recommended to use Filebeat or similar log shipper tools to sync logs directly from the file system to external services like Elasticsearch or Opensearch, making the log mirroring process fully independent of the Magento runtime.

## Supported Version
    ``Magento 2.4.8``

## Installation
 - Install the module composer by running `composer require magestack/module-opensearchlogger`
 - enable the module by running `php bin/magento module:enable MageStack_OpenSearchLogger`
 - apply database updates by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`

## Configuration
- The module can be configured via the Magento Admin Panel under `Stores > Configuration > Easy Mage > OpenSearch Logger` at default level only.

