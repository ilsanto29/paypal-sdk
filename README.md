# paypal-sdk

github project: https://github.com/ilsanto29/paypal-sdk


This library contains implementation with Paypal rest API v2.

## 0.0.1 (2025-01-25)
### Aggiunto (Added)

# FAQ
This library need a config INI file with 2 session: production and developmet.
For development write your .htaccess with global variable

````
SetEnv APPLICATION_ENV development
````

Examples
________

````
[production]

baseUrl = https://api-m.paypal.com
clientId =
clientSecret =


[development]
baseUrl = https://api-m.sandbox.paypal.com
clientId = 
clientSecret =
````
