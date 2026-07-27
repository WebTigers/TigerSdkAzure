# Tiger Azure PHP SDK

Adds the **Azure Blob Storage** SDK to your Tiger install so you can store media in **Azure Blob Storage** — with
**no Composer required on the server**. Install it from the Module Manager, activate it, then pick
**Azure Blob Storage** in *Settings → Media → Storage*.

- **What it does:** bundles `microsoft/azure-storage-blob` and everything it needs, and puts it on the autoload path only
  while the module is active. The core Azure Blob Storage storage adapter does the rest.
- **One cloud SDK at a time.** This module is mutually exclusive with the other cloud SDK providers —
  activating one automatically deactivates the others (you'll be asked to confirm).
- **Credentials:** enter them on the Storage tab, or use the server's ambient/default credentials where
  the provider supports it.
- **Updates:** the bundle tracks the latest `microsoft/azure-storage-blob` release; the Module Manager flags a newer version.

**License:** MIT (this module). The bundled SDK is MIT — see [NOTICE](NOTICE.md). "Tiger" and
"WebTigers" are trademarks of WebTigers.
