<?php
// SPDX-License-Identifier: MIT
// Copyright (c) 2026 WebTigers. Tiger™ and WebTigers™ are trademarks of WebTigers.
/**
 * Tiger Azure PHP SDK — provider-module bootstrap.
 *
 * A "provider" module: it ships no controllers, routes, or views — its whole job is to put the
 * vendored Azure Storage Blob SDK on the autoload path so `MicrosoftAzure\Storage\Blob\BlobRestProxy`
 * (used by the core `Tiger_Media_Storage_Azure` adapter) resolves. The SDK + all its dependencies
 * live in this module's own `vendor/` (bundled into the release, not the repo).
 *
 * Active-only, by construction: a DEACTIVATED module's Bootstrap never runs (the modules resource
 * strips inactive slugs before bootstrapping), so the SDK is on the path ONLY while this module is
 * active. That is also why only ONE cloud-SDK provider may be active at a time — see `module.json`
 * "conflict" — two would load two copies of Guzzle and fatal.
 */
class TigerSdkAzure_Bootstrap extends Zend_Application_Module_Bootstrap
{
    /** Register the bundled Azure Storage SDK autoloader (no-op if the vendored bundle isn't present). */
    protected function _initSdkAutoload()
    {
        $autoload = __DIR__ . '/vendor/autoload.php';
        if (is_file($autoload)) {
            require_once $autoload;
        }
    }
}
