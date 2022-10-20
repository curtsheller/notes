# Composer

## Memory Limits

- [**Memory Limit Error**](https://getcomposer.org/doc/articles/troubleshooting.md#memory-limit-errors)

Use -1 for unlimited or define an explicit value like 2G

`COMPOSER_MEMORY_LIMIT=-1` put before running/calling `composer`

To get the current memory limit in php.
```
php -r "echo ini_get('memory_limit').PHP_EOL;"`
```

## How To Read Composer Versions

```
"vendor.package: "1.3.2", // exactly 1.3.2 (exact)

// >, <. >=, <= | specify upper and lower bounds
"vendor.package: ">=1.3.2", // anything above or equal 1.3.2
"vendor.package: "<1.3.2",  // anything below 1.3.2

// * | wildcard
"vendor.package: "1.3.*", // >=1.3.0 <1.4.0

// ~ | allows last digit specified to go up
"vendor.package: "~1.3.2", // >=1.3.2 <1.4.0
"vendor.package: "~1.3", // >=1.3.0 <2.0.0

// ^ | doesn't allow breaking changes (major version fixed - following semvar)
"vendor.package: "^1.3.2", // >=1.3.2 < 2.0.0
"vendor.package: "^0.3.2", // >-0.3.2 <0.4.0 // except if major version is 0

```