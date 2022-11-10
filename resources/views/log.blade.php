[2022-11-10 10:57:33] local.INFO: tiroトップへアクセス  
[2022-11-10 10:57:35] local.INFO: array (
)  
[2022-11-10 10:58:12] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
)  
[2022-11-10 10:58:53] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
)  
[2022-11-10 10:58:53] local.ERROR: Undefined array key "延長30分" {"view":{"view":"C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\resources\\views\\mise_back.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-1639741762 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#548</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-1639741762\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","client":"<pre class=sf-dump id=sf-dump-555246642 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\client</span> {<a class=sf-dump-ref>#1531</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">client</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"2 characters\">&#12375;&#12415;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"2 characters\">&#12375;&#12415;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-555246642\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-727113177 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1533</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"4 characters\">mise</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">luna</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#21335;&#36234;&#35895;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">09055555555</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"2 characters\">hp</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">aadd</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">luna</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#21335;&#36234;&#35895;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">09055555555</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"2 characters\">hp</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">aadd</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-727113177\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","backName":"<pre class=sf-dump id=sf-dump-1737906845 data-indent-pad=\"  \">\"<span class=sf-dump-str title=\"7 characters\">default</span>\"
</pre><script>Sfdump(\"sf-dump-1737906845\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","price":"<pre class=sf-dump id=sf-dump-1809000885 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1557</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:23</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1558</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>1</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1559</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1560</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>3</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1561</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>4</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1562</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>5</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1563</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>6</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1564</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>7</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1565</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>8</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1566</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>9</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1567</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>10</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1568</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>11</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1569</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>12</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1570</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>13</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1571</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>14</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1572</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>15</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1573</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>16</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1574</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>17</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1575</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>18</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1576</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>19</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1577</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>20</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1578</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>21</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1579</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>22</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1580</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1809000885\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","typeList":"<pre class=sf-dump id=sf-dump-1184940465 data-indent-pad=\"  \"><span class=sf-dump-note>array:9</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-index>0</span> => \"<span class=sf-dump-str title=\"6 characters\">course</span>\"
  <span class=sf-dump-index>1</span> => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
  <span class=sf-dump-index>2</span> => \"<span class=sf-dump-str title=\"8 characters\">waribiki</span>\"
  <span class=sf-dump-index>3</span> => \"<span class=sf-dump-str title=\"9 characters\">claim1000</span>\"
  <span class=sf-dump-index>4</span> => \"<span class=sf-dump-str title=\"9 characters\">claim2000</span>\"
  <span class=sf-dump-index>5</span> => \"<span class=sf-dump-str title=\"7 characters\">firster</span>\"
  <span class=sf-dump-index>6</span> => \"<span class=sf-dump-str title=\"6 characters\">shimei</span>\"
  <span class=sf-dump-index>7</span> => \"<span class=sf-dump-str title=\"4 characters\">more</span>\"
  <span class=sf-dump-index>8</span> => \"<span class=sf-dump-str title=\"6 characters\">option</span>\"
</samp>]
</pre><script>Sfdump(\"sf-dump-1184940465\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","back":"<pre class=sf-dump id=sf-dump-1459996558 data-indent-pad=\"  \"><span class=sf-dump-note>array:5</span> [<samp data-depth=1 class=sf-dump-expanded>
  \"<span class=sf-dump-key>70&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>7000</span>
  \"<span class=sf-dump-key>100&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>9000</span>
  \"<span class=sf-dump-key>130&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>11000</span>
  \"<span class=sf-dump-key>160&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>13000</span>
  \"<span class=sf-dump-key>&#20840;&#12467;&#12540;&#12473;2000&#20870;&#21106;&#24341;</span>\" => <span class=sf-dump-num>-1000</span>
</samp>]
</pre><script>Sfdump(\"sf-dump-1459996558\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Undefined array key \"延長30分\" at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php:43)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined array...', 'C:\\\\Users\\\\81903....', 43)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php(43): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined array...', 'C:\\\\Users\\\\81903....', 43)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\81903....')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\81903....', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(61): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(139): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(122): Illuminate\\View\\View->getContents()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(91): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(833): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(802): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}

[previous exception] [object] (ErrorException(code: 0): Undefined array key \"延長30分\" at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php:43)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined array...', 'C:\\\\Users\\\\81903....', 43)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php(43): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined array...', 'C:\\\\Users\\\\81903....', 43)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\81903....')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\81903....', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(61): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(139): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(122): Illuminate\\View\\View->getContents()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(91): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(833): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(802): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}
"} 
[2022-11-10 11:02:44] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
)  
[2022-11-10 11:02:51] local.INFO: array (
  '70分コース' => 6000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
)  
[2022-11-10 11:04:42] local.INFO: array (
  '70分コース' => 6000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
)  
[2022-11-10 11:04:47] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
)  
[2022-11-10 11:08:35] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  '衣装チェンジ' => 2000,
)  
[2022-11-10 11:08:48] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '衣装チェンジ' => 2000,
)  
[2022-11-10 11:11:55] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '衣装チェンジ' => 2000,
)  
[2022-11-10 11:13:12] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '初回' => 0,
  '本指名' => 1000,
  'プラチナセラピスト' => 1000,
  'プラチナセラピスト本指名' => 2000,
  'ディープリンパ' => 2000,
  '衣装チェンジ' => 2000,
  'ドバドバオイル' => 2000,
  'ホイップ' => 2000,
  '目隠しパウダー' => 2000,
  'オプション2つセット' => 3000,
  'オプション3つセット' => 4000,
  'オプション4つセット' => 5000,
  'オプション5つセット' => 6000,
)  
[2022-11-10 11:19:22] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '初回' => 0,
  '本指名' => 1000,
  'プラチナセラピスト' => 1000,
  'プラチナセラピスト本指名' => 2000,
  'ディープリンパ' => 2000,
  '衣装チェンジ' => 2000,
  'ドバドバオイル' => 2000,
  'ホイップ' => 2000,
  '目隠しパウダー' => 2000,
  'オプション2つセット' => 3000,
  'オプション3つセット' => 4000,
  'オプション4つセット' => 5000,
  'オプション5つセット' => 6000,
)  
[2022-11-10 11:19:28] local.INFO: array (
  '70分コース' => 7000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '初回' => 0,
  '本指名' => 1000,
  'プラチナセラピスト' => 1000,
  'プラチナセラピスト本指名' => 2000,
  'ディープリンパ' => 2000,
  '衣装チェンジ' => 2000,
  'ドバドバオイル' => 2000,
  'ホイップ' => 2000,
  '目隠しパウダー' => 2000,
  'オプション2つセット' => 3000,
  'オプション3つセット' => 4000,
  'オプション4つセット' => 5000,
  'オプション5つセット' => 6000,
)  
[2022-11-10 11:19:32] local.INFO: array (
  '70分コース' => 6000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '初回' => 0,
  '本指名' => 1000,
  'プラチナセラピスト' => 1000,
  'プラチナセラピスト本指名' => 2000,
  'ディープリンパ' => 2000,
  '衣装チェンジ' => 2000,
  'ドバドバオイル' => 2000,
  'ホイップ' => 2000,
  '目隠しパウダー' => 2000,
  'オプション2つセット' => 3000,
  'オプション3つセット' => 4000,
  'オプション4つセット' => 5000,
  'オプション5つセット' => 6000,
)  
[2022-11-10 11:23:26] local.INFO: array (
  '70分コース' => 6000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '初回' => 0,
  '本指名' => 1000,
  'プラチナセラピスト' => 1000,
  'プラチナセラピスト本指名' => 2000,
  'ディープリンパ' => 2000,
  '衣装チェンジ' => 2000,
  'ドバドバオイル' => 2000,
  'ホイップ' => 2000,
  '目隠しパウダー' => 2000,
  'オプション2つセット' => 3000,
  'オプション3つセット' => 4000,
  'オプション4つセット' => 5000,
  'オプション5つセット' => 6000,
)  
[2022-11-10 11:23:42] local.INFO: array (
  '70分コース' => 6000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '初回' => 0,
  '本指名' => 1000,
  'プラチナセラピスト' => 1000,
  'プラチナセラピスト本指名' => 2000,
  'ディープリンパ' => 2000,
  '衣装チェンジ' => 2000,
  'ドバドバオイル' => 2000,
  'ホイップ' => 2000,
  '目隠しパウダー' => 2000,
  'オプション2つセット' => 3000,
  'オプション3つセット' => 4000,
  'オプション4つセット' => 5000,
  'オプション5つセット' => 6000,
)  
[2022-11-10 11:42:07] local.INFO: array (
  '70分コース' => 6000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '初回' => 0,
  '本指名' => 1000,
  'プラチナセラピスト' => 1000,
  'プラチナセラピスト本指名' => 2000,
  'ディープリンパ' => 2000,
  '衣装チェンジ' => 2000,
  'ドバドバオイル' => 2000,
  'ホイップ' => 2000,
  '目隠しパウダー' => 2000,
  'オプション2つセット' => 3000,
  'オプション3つセット' => 4000,
  'オプション4つセット' => 5000,
  'オプション5つセット' => 6000,
)  
[2022-11-10 11:42:07] local.ERROR: Undefined variable $formData {"view":{"view":"C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\resources\\views\\mise_back.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-672101410 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#548</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-672101410\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","client":"<pre class=sf-dump id=sf-dump-1121735805 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\client</span> {<a class=sf-dump-ref>#1531</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">client</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"2 characters\">&#12375;&#12415;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"2 characters\">&#12375;&#12415;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1121735805\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-1372001431 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1533</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"4 characters\">mise</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">luna</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#21335;&#36234;&#35895;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">09055555555</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"2 characters\">hp</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">aadd</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">luna</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#21335;&#36234;&#35895;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">09055555555</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"2 characters\">hp</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">aadd</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1372001431\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","backName":"<pre class=sf-dump id=sf-dump-1764897811 data-indent-pad=\"  \">\"<span class=sf-dump-str title=\"7 characters\">default</span>\"
</pre><script>Sfdump(\"sf-dump-1764897811\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","price":"<pre class=sf-dump id=sf-dump-877537391 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1556</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:22</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1557</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>1</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1558</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1559</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>3</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1560</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>4</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1561</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>5</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1562</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>6</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1563</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>7</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1564</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>8</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1565</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>9</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1566</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>10</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1567</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>11</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1568</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>12</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1569</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>13</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1570</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>14</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1571</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>15</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1572</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>16</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1573</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>17</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1574</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>18</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1575</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>19</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1576</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>20</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1577</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>21</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1578</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-877537391\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","typeList":"<pre class=sf-dump id=sf-dump-1302621650 data-indent-pad=\"  \"><span class=sf-dump-note>array:9</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-index>0</span> => \"<span class=sf-dump-str title=\"6 characters\">course</span>\"
  <span class=sf-dump-index>1</span> => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
  <span class=sf-dump-index>2</span> => \"<span class=sf-dump-str title=\"8 characters\">waribiki</span>\"
  <span class=sf-dump-index>3</span> => \"<span class=sf-dump-str title=\"9 characters\">claim1000</span>\"
  <span class=sf-dump-index>4</span> => \"<span class=sf-dump-str title=\"9 characters\">claim2000</span>\"
  <span class=sf-dump-index>5</span> => \"<span class=sf-dump-str title=\"7 characters\">firster</span>\"
  <span class=sf-dump-index>6</span> => \"<span class=sf-dump-str title=\"6 characters\">shimei</span>\"
  <span class=sf-dump-index>7</span> => \"<span class=sf-dump-str title=\"4 characters\">more</span>\"
  <span class=sf-dump-index>8</span> => \"<span class=sf-dump-str title=\"6 characters\">option</span>\"
</samp>]
</pre><script>Sfdump(\"sf-dump-1302621650\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","back":"<pre class=sf-dump id=sf-dump-427903646 data-indent-pad=\"  \"><span class=sf-dump-note>array:21</span> [<samp data-depth=1 class=sf-dump-expanded>
  \"<span class=sf-dump-key>70&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>6000</span>
  \"<span class=sf-dump-key>100&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>9000</span>
  \"<span class=sf-dump-key>130&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>11000</span>
  \"<span class=sf-dump-key>160&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>13000</span>
  \"<span class=sf-dump-key>&#20840;&#12467;&#12540;&#12473;2000&#20870;&#21106;&#24341;</span>\" => <span class=sf-dump-num>-1000</span>
  \"<span class=sf-dump-key>&#12513;&#12531;&#12456;&#12473;&#12521;&#12531;&#12461;&#12531;&#12464;&#21106;</span>\" => <span class=sf-dump-num>0</span>
  \"<span class=sf-dump-key>claim1000</span>\" => <span class=sf-dump-num>0</span>
  \"<span class=sf-dump-key>claim2000</span>\" => <span class=sf-dump-num>0</span>
  \"<span class=sf-dump-key>&#21021;&#22238;</span>\" => <span class=sf-dump-num>0</span>
  \"<span class=sf-dump-key>&#26412;&#25351;&#21517;</span>\" => <span class=sf-dump-num>1000</span>
  \"<span class=sf-dump-key>&#12503;&#12521;&#12481;&#12490;&#12475;&#12521;&#12500;&#12473;&#12488;</span>\" => <span class=sf-dump-num>1000</span>
  \"<span class=sf-dump-key>&#12503;&#12521;&#12481;&#12490;&#12475;&#12521;&#12500;&#12473;&#12488;&#26412;&#25351;&#21517;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#12487;&#12451;&#12540;&#12503;&#12522;&#12531;&#12497;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#34915;&#35013;&#12481;&#12455;&#12531;&#12472;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#12489;&#12496;&#12489;&#12496;&#12458;&#12452;&#12523;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#12507;&#12452;&#12483;&#12503;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#30446;&#38560;&#12375;&#12497;&#12454;&#12480;&#12540;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#12458;&#12503;&#12471;&#12519;&#12531;2&#12388;&#12475;&#12483;&#12488;</span>\" => <span class=sf-dump-num>3000</span>
  \"<span class=sf-dump-key>&#12458;&#12503;&#12471;&#12519;&#12531;3&#12388;&#12475;&#12483;&#12488;</span>\" => <span class=sf-dump-num>4000</span>
  \"<span class=sf-dump-key>&#12458;&#12503;&#12471;&#12519;&#12531;4&#12388;&#12475;&#12483;&#12488;</span>\" => <span class=sf-dump-num>5000</span>
  \"<span class=sf-dump-key>&#12458;&#12503;&#12471;&#12519;&#12531;5&#12388;&#12475;&#12483;&#12488;</span>\" => <span class=sf-dump-num>6000</span>
</samp>]
</pre><script>Sfdump(\"sf-dump-427903646\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","message":"<pre class=sf-dump id=sf-dump-338166925 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-338166925\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Undefined variable $formData at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php:241)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php(241): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\81903....')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\81903....', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(61): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(139): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(122): Illuminate\\View\\View->getContents()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(91): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(833): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(802): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}

[previous exception] [object] (ErrorException(code: 0): Undefined variable $formData at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php:241)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php(241): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\81903....')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\81903....', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(61): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(139): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(122): Illuminate\\View\\View->getContents()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(91): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(833): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(802): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}
"} 
[2022-11-10 12:10:58] local.INFO: array (
  '70分コース' => 6000,
  '100分コース' => 9000,
  '130分コース' => 11000,
  '160分コース' => 13000,
  '全コース2000円割引' => -1000,
  'メンエスランキング割' => 0,
  'claim1000' => 0,
  'claim2000' => 0,
  '初回' => 0,
  '本指名' => 1000,
  'プラチナセラピスト' => 1000,
  'プラチナセラピスト本指名' => 2000,
  'ディープリンパ' => 2000,
  '衣装チェンジ' => 2000,
  'ドバドバオイル' => 2000,
  'ホイップ' => 2000,
  '目隠しパウダー' => 2000,
  'オプション2つセット' => 3000,
  'オプション3つセット' => 4000,
  'オプション4つセット' => 5000,
  'オプション5つセット' => 6000,
)  
[2022-11-10 12:10:58] local.ERROR: Undefined variable $formData {"view":{"view":"C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\resources\\views\\mise_back.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-516624550 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#548</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-516624550\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","client":"<pre class=sf-dump id=sf-dump-1786491386 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\client</span> {<a class=sf-dump-ref>#1531</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">client</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"2 characters\">&#12375;&#12415;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"2 characters\">&#12375;&#12415;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:24</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1786491386\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-741069430 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1533</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"4 characters\">mise</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">luna</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#21335;&#36234;&#35895;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">09055555555</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"2 characters\">hp</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">aadd</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">luna</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#21335;&#36234;&#35895;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">09055555555</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"2 characters\">hp</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">aadd</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-10-31 11:59:50</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-741069430\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","backName":"<pre class=sf-dump id=sf-dump-1285996779 data-indent-pad=\"  \">\"<span class=sf-dump-str title=\"7 characters\">default</span>\"
</pre><script>Sfdump(\"sf-dump-1285996779\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","price":"<pre class=sf-dump id=sf-dump-143882909 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1556</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:22</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1557</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>1</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1558</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1559</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>3</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1560</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>4</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1561</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>5</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1562</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>6</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1563</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>7</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1564</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>8</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1565</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>9</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1566</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>10</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1567</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>11</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1568</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>12</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1569</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>13</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1570</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>14</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1571</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>15</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1572</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>16</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1573</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>17</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1574</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>18</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1575</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>19</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1576</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>20</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1577</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>21</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1578</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-143882909\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","typeList":"<pre class=sf-dump id=sf-dump-791754375 data-indent-pad=\"  \"><span class=sf-dump-note>array:9</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-index>0</span> => \"<span class=sf-dump-str title=\"6 characters\">course</span>\"
  <span class=sf-dump-index>1</span> => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
  <span class=sf-dump-index>2</span> => \"<span class=sf-dump-str title=\"8 characters\">waribiki</span>\"
  <span class=sf-dump-index>3</span> => \"<span class=sf-dump-str title=\"9 characters\">claim1000</span>\"
  <span class=sf-dump-index>4</span> => \"<span class=sf-dump-str title=\"9 characters\">claim2000</span>\"
  <span class=sf-dump-index>5</span> => \"<span class=sf-dump-str title=\"7 characters\">firster</span>\"
  <span class=sf-dump-index>6</span> => \"<span class=sf-dump-str title=\"6 characters\">shimei</span>\"
  <span class=sf-dump-index>7</span> => \"<span class=sf-dump-str title=\"4 characters\">more</span>\"
  <span class=sf-dump-index>8</span> => \"<span class=sf-dump-str title=\"6 characters\">option</span>\"
</samp>]
</pre><script>Sfdump(\"sf-dump-791754375\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","back":"<pre class=sf-dump id=sf-dump-1553420123 data-indent-pad=\"  \"><span class=sf-dump-note>array:21</span> [<samp data-depth=1 class=sf-dump-expanded>
  \"<span class=sf-dump-key>70&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>6000</span>
  \"<span class=sf-dump-key>100&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>9000</span>
  \"<span class=sf-dump-key>130&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>11000</span>
  \"<span class=sf-dump-key>160&#20998;&#12467;&#12540;&#12473;</span>\" => <span class=sf-dump-num>13000</span>
  \"<span class=sf-dump-key>&#20840;&#12467;&#12540;&#12473;2000&#20870;&#21106;&#24341;</span>\" => <span class=sf-dump-num>-1000</span>
  \"<span class=sf-dump-key>&#12513;&#12531;&#12456;&#12473;&#12521;&#12531;&#12461;&#12531;&#12464;&#21106;</span>\" => <span class=sf-dump-num>0</span>
  \"<span class=sf-dump-key>claim1000</span>\" => <span class=sf-dump-num>0</span>
  \"<span class=sf-dump-key>claim2000</span>\" => <span class=sf-dump-num>0</span>
  \"<span class=sf-dump-key>&#21021;&#22238;</span>\" => <span class=sf-dump-num>0</span>
  \"<span class=sf-dump-key>&#26412;&#25351;&#21517;</span>\" => <span class=sf-dump-num>1000</span>
  \"<span class=sf-dump-key>&#12503;&#12521;&#12481;&#12490;&#12475;&#12521;&#12500;&#12473;&#12488;</span>\" => <span class=sf-dump-num>1000</span>
  \"<span class=sf-dump-key>&#12503;&#12521;&#12481;&#12490;&#12475;&#12521;&#12500;&#12473;&#12488;&#26412;&#25351;&#21517;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#12487;&#12451;&#12540;&#12503;&#12522;&#12531;&#12497;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#34915;&#35013;&#12481;&#12455;&#12531;&#12472;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#12489;&#12496;&#12489;&#12496;&#12458;&#12452;&#12523;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#12507;&#12452;&#12483;&#12503;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#30446;&#38560;&#12375;&#12497;&#12454;&#12480;&#12540;</span>\" => <span class=sf-dump-num>2000</span>
  \"<span class=sf-dump-key>&#12458;&#12503;&#12471;&#12519;&#12531;2&#12388;&#12475;&#12483;&#12488;</span>\" => <span class=sf-dump-num>3000</span>
  \"<span class=sf-dump-key>&#12458;&#12503;&#12471;&#12519;&#12531;3&#12388;&#12475;&#12483;&#12488;</span>\" => <span class=sf-dump-num>4000</span>
  \"<span class=sf-dump-key>&#12458;&#12503;&#12471;&#12519;&#12531;4&#12388;&#12475;&#12483;&#12488;</span>\" => <span class=sf-dump-num>5000</span>
  \"<span class=sf-dump-key>&#12458;&#12503;&#12471;&#12519;&#12531;5&#12388;&#12475;&#12483;&#12488;</span>\" => <span class=sf-dump-num>6000</span>
</samp>]
</pre><script>Sfdump(\"sf-dump-1553420123\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","message":"<pre class=sf-dump id=sf-dump-31330451 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-31330451\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Undefined variable $formData at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php:241)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php(241): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\81903....')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\81903....', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(61): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(139): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(122): Illuminate\\View\\View->getContents()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(91): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(833): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(802): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}

[previous exception] [object] (ErrorException(code: 0): Undefined variable $formData at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php:241)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php(241): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\81903....')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\81903....', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(61): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(139): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(122): Illuminate\\View\\View->getContents()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(91): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(833): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(802): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}
"} 
[2022-11-10 13:04:17] local.INFO: tiroトップへアクセス  
[2022-11-10 13:04:24] local.INFO: tiroトップへアクセス  
[2022-11-10 13:04:24] local.INFO: tiroトップへアクセス  
[2022-11-10 13:04:26] local.INFO: tiroトップへアクセス  
[2022-11-10 13:06:02] local.INFO: array (
)  
[2022-11-10 13:06:02] local.ERROR: Undefined variable $formData {"view":{"view":"C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\resources\\views\\mise_back.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-2084023644 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#548</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-2084023644\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","client":"<pre class=sf-dump id=sf-dump-1811205415 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\client</span> {<a class=sf-dump-ref>#1531</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">client</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#12375;&#12415;&#12373;&#12435;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 13:04:41</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 13:04:41</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#12375;&#12415;&#12373;&#12435;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 13:04:41</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 13:04:41</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1811205415\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-1322029868 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1533</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"4 characters\">mise</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12450;&#12525;&#12510;&#12523;&#12490;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12450;&#12525;&#12510;&#12523;&#12490;</span>\"
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#21335;&#36234;&#35895;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">04844444444</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"4 characters\">http</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">here</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 13:05:13</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 13:05:13</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12450;&#12525;&#12510;&#12523;&#12490;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12450;&#12525;&#12510;&#12523;&#12490;</span>\"
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#21335;&#36234;&#35895;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">04844444444</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"4 characters\">http</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">here</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 13:05:13</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 13:05:13</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1322029868\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","backName":"<pre class=sf-dump id=sf-dump-1224065429 data-indent-pad=\"  \">\"<span class=sf-dump-str title=\"7 characters\">default</span>\"
</pre><script>Sfdump(\"sf-dump-1224065429\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","price":"<pre class=sf-dump id=sf-dump-2091130596 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1538</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:4</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1539</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>1</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1540</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1541</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>3</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1542</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [ &#8230;9]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-2091130596\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","typeList":"<pre class=sf-dump id=sf-dump-1744296980 data-indent-pad=\"  \"><span class=sf-dump-note>array:2</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-index>0</span> => \"<span class=sf-dump-str title=\"6 characters\">course</span>\"
  <span class=sf-dump-index>1</span> => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
</samp>]
</pre><script>Sfdump(\"sf-dump-1744296980\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","back":"<pre class=sf-dump id=sf-dump-1087593471 data-indent-pad=\"  \">[]
</pre><script>Sfdump(\"sf-dump-1087593471\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","message":"<pre class=sf-dump id=sf-dump-360924148 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-360924148\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Undefined variable $formData at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php:241)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php(241): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\81903....')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\81903....', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(61): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(139): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(122): Illuminate\\View\\View->getContents()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(91): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(833): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(802): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}

[previous exception] [object] (ErrorException(code: 0): Undefined variable $formData at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php:241)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\storage\\framework\\views\\4c7a3d54a2b345fe44eef9dfa7aba06d11deed4e.php(241): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\81903....', 241)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\81903....')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\81903....', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(61): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\81903....', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(139): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\81903....', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(122): Illuminate\\View\\View->getContents()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(91): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(833): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(802): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}
"} 
[2022-11-10 13:14:52] local.ERROR: SQLSTATE[22007]: Invalid datetime format: 1366 Incorrect integer value: 'aa' for column `wing`.`back`.`price` at row 1 (SQL: insert into `back` (`mise_id`, `price_name`, `name`, `price`, `ocha`, `updated_at`, `created_at`) values (1, ocha_name_1, default, aa, ?, 2022-11-10 13:14:52, 2022-11-10 13:14:52)) {"userId":1,"exception":"[object] (Illuminate\\Database\\QueryException(code: 22007): SQLSTATE[22007]: Invalid datetime format: 1366 Incorrect integer value: 'aa' for column `wing`.`back`.`price` at row 1 (SQL: insert into `back` (`mise_id`, `price_name`, `name`, `price`, `ocha`, `updated_at`, `created_at`) values (1, ocha_name_1, default, aa, ?, 2022-11-10 13:14:52, 2022-11-10 13:14:52)) at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:759)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(719): Illuminate\\Database\\Connection->runQueryCallback('insert into `ba...', Array, Object(Closure))
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(545): Illuminate\\Database\\Connection->run('insert into `ba...', Array, Object(Closure))
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(497): Illuminate\\Database\\Connection->statement('insert into `ba...', Array)
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Processors\\Processor.php(32): Illuminate\\Database\\Connection->insert('insert into `ba...', Array)
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3252): Illuminate\\Database\\Query\\Processors\\Processor->processInsertGetId(Object(Illuminate\\Database\\Query\\Builder), 'insert into `ba...', Array, 'id')
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(1858): Illuminate\\Database\\Query\\Builder->insertGetId(Array, 'id')
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1245): Illuminate\\Database\\Eloquent\\Builder->__call('insertGetId', Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1210): Illuminate\\Database\\Eloquent\\Model->insertAndSetId(Object(Illuminate\\Database\\Eloquent\\Builder), Array)
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1051): Illuminate\\Database\\Eloquent\\Model->performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Models\\Back.php(42): Illuminate\\Database\\Eloquent\\Model->save()
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\ClientController.php(339): App\\Models\\back::backInsert('1', 'ocha_name_1', 'default', 'aa')
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\ClientController->backedit(Object(Illuminate\\Http\\Request), '3', '1', 'default')
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('backedit', Array)
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(261): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\ClientController), 'backedit')
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(204): Illuminate\\Routing\\Route->runController()
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Route->run()
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}

[previous exception] [object] (PDOException(code: 22007): SQLSTATE[22007]: Invalid datetime format: 1366 Incorrect integer value: 'aa' for column `wing`.`back`.`price` at row 1 at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:544)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(544): PDOStatement->execute()
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(752): Illuminate\\Database\\Connection->Illuminate\\Database\\{closure}('insert into `ba...', Array)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(719): Illuminate\\Database\\Connection->runQueryCallback('insert into `ba...', Array, Object(Closure))
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(545): Illuminate\\Database\\Connection->run('insert into `ba...', Array, Object(Closure))
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(497): Illuminate\\Database\\Connection->statement('insert into `ba...', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Processors\\Processor.php(32): Illuminate\\Database\\Connection->insert('insert into `ba...', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3252): Illuminate\\Database\\Query\\Processors\\Processor->processInsertGetId(Object(Illuminate\\Database\\Query\\Builder), 'insert into `ba...', Array, 'id')
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(1858): Illuminate\\Database\\Query\\Builder->insertGetId(Array, 'id')
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1245): Illuminate\\Database\\Eloquent\\Builder->__call('insertGetId', Array)
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1210): Illuminate\\Database\\Eloquent\\Model->insertAndSetId(Object(Illuminate\\Database\\Eloquent\\Builder), Array)
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(1051): Illuminate\\Database\\Eloquent\\Model->performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Models\\Back.php(42): Illuminate\\Database\\Eloquent\\Model->save()
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\ClientController.php(339): App\\Models\\back::backInsert('1', 'ocha_name_1', 'default', 'aa')
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\ClientController->backedit(Object(Illuminate\\Http\\Request), '3', '1', 'default')
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('backedit', Array)
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(261): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\ClientController), 'backedit')
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(204): Illuminate\\Routing\\Route->runController()
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Route->run()
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#59 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#61 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#62 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#63 {main}
"} 
[2022-11-10 15:11:03] local.INFO: tiroトップへアクセス  
[2022-11-10 15:17:32] local.ERROR: Too few arguments to function App\Http\Controllers\ClientController::top(), 0 passed in C:\Users\81903.DESKTOP-GBA336J.000\tiro Dropbox\Next DB\project\wing\laravel\wing\vendor\laravel\framework\src\Illuminate\Routing\Controller.php on line 54 and exactly 1 expected {"userId":3,"exception":"[object] (ArgumentCountError(code: 0): Too few arguments to function App\\Http\\Controllers\\ClientController::top(), 0 passed in C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php on line 54 and exactly 1 expected at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\ClientController.php:61)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\ClientController->top()
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('top', Array)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(261): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\ClientController), 'top')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(204): Illuminate\\Routing\\Route->runController()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Route->run()
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#50 {main}
"} 
[2022-11-10 15:19:07] local.ERROR: Too few arguments to function App\Http\Controllers\ClientController::top(), 0 passed in C:\Users\81903.DESKTOP-GBA336J.000\tiro Dropbox\Next DB\project\wing\laravel\wing\vendor\laravel\framework\src\Illuminate\Routing\Controller.php on line 54 and exactly 1 expected {"userId":3,"exception":"[object] (ArgumentCountError(code: 0): Too few arguments to function App\\Http\\Controllers\\ClientController::top(), 0 passed in C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php on line 54 and exactly 1 expected at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\ClientController.php:61)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\ClientController->top()
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('top', Array)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(261): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\ClientController), 'top')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(204): Illuminate\\Routing\\Route->runController()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Route->run()
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#50 {main}
"} 
[2022-11-10 15:21:43] local.ERROR: View [therapist] not found. {"userId":4,"exception":"[object] (InvalidArgumentException(code: 0): View [therapist] not found. at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php:137)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths('therapist', Array)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Factory.php(137): Illuminate\\View\\FileViewFinder->find('therapist')
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php(969): Illuminate\\View\\Factory->make('therapist', Array, Array)
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\TherapistController.php(60): view('therapist', Array)
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\TherapistController->top()
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('top', Array)
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(261): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\TherapistController), 'top')
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(204): Illuminate\\Routing\\Route->runController()
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Route->run()
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#53 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#54 {main}
"} 
[2022-11-10 15:22:02] local.INFO: tiroトップへアクセス  
[2022-11-10 15:22:04] local.INFO: tiroトップへアクセス  
