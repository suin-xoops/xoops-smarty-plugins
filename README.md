# XOOPS Smarty Plugins

XOOPS Cube Legacyで使えるSmartyプラグイン集。


## インストール方法

### XOOPS Cube Legacy 2.2.x ~

* xoops_trust_path/libs/smarty/plugins/ にプラグインファイルを配置する

### XOOPS 2.x / XOOPS Cube Legacy 2.1.x

* html/class/smarty/plugins/ にプラグインファイルを配置する

### TOKYOPen 2.0 ~

* xoops_trust_path/vendor/smarty/plugins/ にプラグインファイルを配置する


## ドキュメント

### Function

There are no functions plugins.

### Modifier

#### date_count_down: 残り時間を表示するプラグイン

未来の日時に対して、残り時間を「3分」、「10時間」、「4日」のように表示するプラグインです。

```
<{$datetime|date_count_down}>
```

### Block

There are no block plugins.