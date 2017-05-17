#Layout

* 参考了Bootstrap3的布局样式。
* 默认提供2列,3列,4列,5列,6列,7列,8列,9列,10列,12列,20列这几种web的常用布局，也可根据需要订制。
* 提供了push,pull,offset。
* 默认提供了default（默认列间距），nogutter（无列间距），gutter-s（稍小的列间距）, gutter-x（稍大的列间距），gutter-xx（更大的列间距）这五种列间距模式，也可根据需要订制。

## 代码示例

### 1.基本代码

```html
  <div class="container">
    <!-- 1/2 + 1/2 布局 -->
    <div class="row">
      <div class="col grid-2-1">...</div>
      <div class="col grid-2-1">...</div>
    </div>
	<!-- 1/3 + 1/3 + 1/3 布局 -->
    <div class="row">
      <div class="col grid-3-1">...</div>
      <div class="col grid-3-1">...</div>
	  <div class="col grid-3-1">...</div>
    </div>
	<!-- 100% 布局 -->
    <div class="row">
      <div class="col">...</div>
    </div>
  </div>
```

### 2.设置列间距(Gutter)

```html
  <div class="container gutter-xx">
     ...
  </div>
```

### 3. 设置等高列（match-height）

如果设置在container上，container内的所有的col均为等高列：

```html
  <div class="container match-height">
     ...
  </div>
```

如果设置在row上，row内所有的col均为等高列：

```html
<div class="container">
  <div class="row">
  </div>
  <div class="row match-height"><!-- 本行的col为等高列 -->
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
  </div>
  <div class="row">
  </div>
</div>
```