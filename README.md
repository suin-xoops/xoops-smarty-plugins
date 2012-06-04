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

#### date_weekday: 曜日の日本語を表示するプラグイン

日付に対して、「月」や「火」などの曜日を表示するプラグイン。

```
<{$datetime|date_weekday}>
```

第1引数に ```true``` をセットすると長い曜日名（「月曜日」や「火曜日」）を表示できます。

```
<{$datetime|date_weekday:true}>
```


### Block

There are no block plugins.