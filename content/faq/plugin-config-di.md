---
title: Plugin Konfiguration via DI Container holen
tags: ["Plugin", "Cheats"]
---


**Diese Methode sollte nur benutzt werden, wenn keine Subshops vorhanden ist.
Die Subshops werden in dieser Methode ignoriert.**

Als erstes definieren wir einen eigenen Service, der uns am Ende unsere Plugin Config liefert.

```xml
<service id="myplugin.config" class="Shopware\Components\Plugin\CachedConfigReader">
    <factory service="shopware.plugin.cached_config_reader" method="getByPluginName"/>
    <argument type="string">MyPlugin</argument>
</service>
```

Nun könnt ihr eure Plugin Config in andere Services injecten oder ihn via $container->get vom Container holen.