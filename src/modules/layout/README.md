#Layout

* 参考了Bootstrap3的布局样式。
* 提供了2列,3列,4列,5列,6列,7列,8列,9列,10列,12列,20列这几种web的常用布局。还可根据需要订制。
* 提供了push,pull,offset。
* 提供了default（默认列间距），nogutter（无列间距），gutter-s（稍小的列间距）, gutter-x（稍大的列间距），gutter-xx（更大的列间距）这五种列间距模式。还可根据需要订制。

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