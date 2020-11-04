# Jellyfish Thirty Five Up Module
[![Build Status](https://travis-ci.org/fond-of/spryker-jellyfish-thirty-five-up.svg?branch=master)](https://travis-ci.org/fond-of/spryker-jellyfish-thirty-five-up)
[![PHP from Travis config](https://img.shields.io/travis/php-v/symfony/symfony.svg)](https://php.net/)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/spryker-jellyfish-thirty-five-up)

## What it does

* Provides expander plugins vor jellyfish order export.
    * Maps needed data for ThirtyFiveUp

## Installation

```
composer require fond-of-spryker/jellyfish-thirty-five-up
```

## Configuration
Register mapping plugin `JellyfishThirtyFiveUpOrderExpanderPlugin` in `src/Pyz/Zed/JellyfishSalesOrder/JellyfishSalesOrderDependencyProvider.php`

```
    protected function getJellyfishOrderExpanderPostMapPlugins(): array
    {
        return [
            ...
            new JellyfishThirtyFiveUpOrderExpanderPlugin(),
        ];
    }
```

Register mapping plugin `JellyfishThirtyFiveUpOrderItemExpanderPostMapPlugin` in `src/Pyz/Zed/JellyfishSalesOrder/JellyfishSalesOrderDependencyProvider.php`

```
    protected function getJellyfishOrderItemExpanderPostMapPlugins(): array
    {
        return [
            ...
            new JellyfishThirtyFiveUpOrderItemExpanderPostMapPlugin(),
        ];
    }
```
