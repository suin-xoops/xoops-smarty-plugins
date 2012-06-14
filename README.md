# XOOPS Smarty Plugins

XOOPS Cube Legacyで使えるSmartyプラグイン集。


## インストール方法

### XOOPS Cube Legacy 2.2.x ~

* xoops_trust_path/libs/smarty/plugins/ にプラグインファイルを配置する

### XOOPS 2.x / XOOPS Cube Legacy 2.1.x

* html/class/smarty/plugins/ にプラグインファイルを配置する

### TOKYOPen 2.0 ~

* xoops_trust_path/vendor/smarty/plugins/ にプラグインファイルを配置する


# ドキュメント


## Function


### required_sign: フォームの項目に「必須」を表示するプラグイン

```XCube_ActionForm``` を使っているフォームで、項目名の右に「必須」や「任意」を出すためのプラグインです。```XCube_ActionForm``` の ```XCube_FieldProperty::$mDepend``` の設定を見て動的に必須表示を出します。

```
<{required_sign form=$form name="(フィールド名)"}>
```

必須表示のデフォルトHTMLは ```<span class="required">(required)</span>``` です。定数 ```_XOOPS_FORM_REQUIRED_HTML``` を定義することで、このHTMLを置き換えることができます。

```
define('_XOOPS_FORM_REQUIRED_HTML', '<span class="required">[必須]</span>');
define('_XOOPS_FORM_REQUIRED_HTML', '<span class="required">＊</span>');
// etc...
```

任意表示のデフォルトHTMLは空の文字列です。定数 ```_XOOPS_FORM_OPTIONAL_HTML``` を定義することで、任意の場合も表示を出すことができるようになります。

```
define('_XOOPS_FORM_OPTIONAL_HTML', '<span class="optional">(任意)</span>');
define('_XOOPS_FORM_OPTIONAL_HTML', '<span class="optional">[任意]</span>');
// etc...
```

見栄えに関しては、CSSで ```form span.required``` や ```form span.optional``` のスタイルを定義すると良いでしょう。





### serialize_form: フォーム項目を input[type=hidden] で出力する

モジュール開発者向けプラグインです。

```XCube_ActionForm``` のプロパティをすべて ```<input type="hidden" />``` にしてHTMLを出力します。確認画面をつくる場合に使います。

```
<{serialize_form form=$actionForm}>
```






## Modifier



### date_count_down: 残り時間を表示するプラグイン

未来の日時に対して、残り時間を「3分」、「10時間」、「4日」のように表示するプラグインです。

```
<{$datetime|date_count_down}>
```



### date_weekday: 曜日の日本語を表示するプラグイン

日付に対して、「月」や「火」などの曜日を表示するプラグイン。

```
<{$datetime|date_weekday}>
```

第1引数に ```true``` をセットすると長い曜日名（「月曜日」や「火曜日」）を表示できます。

```
<{$datetime|date_weekday:true}>
```



### date_new: 最近の日付に new マークを付けるプラグイン

日付の文字列(```strtotime()```関数で解釈可能な)またはUNIXタイムスタンプに対して使用します。

```
<{$datetime|date_new}>
```

とすると、2週間以内の日付は ```<span class="dateNew">new</span>``` が追加されます。

mainfile.php などで定数 ```_XOOPS_DATE_NEW_INTERVAL``` を定義すると、「2週間」の値を変更することができます。_XOOPS_DATE_NEW_INTERVAL の値は ```strtotime()``` 関数が解釈可能な文字列にします。例えば、次のような記述が可能です。

```
define('_XOOPS_DATE_NEW_INTERVAL', '1 week'); // 1週間
define('_XOOPS_DATE_NEW_INTERVAL', '3 days'); // 3日間
define('_XOOPS_DATE_NEW_INTERVAL', '12 hours'); // 12時間
```

また、new マークは、定数 ```_XOOPS_DATE_NEW_STRING``` を言語ファイルなどに定義することで、カスタマイズ可能です。

```
define('_XOOPS_DATE_NEW_STRING', '新!');
define('_XOOPS_DATE_NEW_STRING', '새로와!');
define('_XOOPS_DATE_NEW_STRING', '<img src="new.png" />'); // ややバッドノウハウだが。
```

newマークは class 属性として ```dateNew``` が付加されています。見栄えの修正はCSSで ```.dateNew``` を指定することで変更可能です。




## Block




There are no block plugins.