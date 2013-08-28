# PHP Core Proxies

CoreProxies is a generic library that provides proxy implementations for core PHP libraries.

PHP's Reflection implementation is unable to read certain information about core PHP classes. This library provides a
mirrored implementation of core classes that can be used by Reflection to obtain metadata.

A practical example would be if you are attempting to inject a lazy-loaded proxy class of `SoapClient` to catch connection
exceptions. Since proxying the core `SoapClient` class will not work, you can instead proxy `CoreProxies\Proxy\SoapClient`
and successfully generate your implementation.