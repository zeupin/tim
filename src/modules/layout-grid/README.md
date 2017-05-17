# 网格布局

### 特点：

* 参考了 Bootstrap v3.x 的布局样式。
* 默认提供2列,3列,4列,5列,6列,7列,8列,9列,10列,12列,20列这几种web的常用布局，也可根据需要订制。
* 提供了 push, pull, offset。
* 默认提供了default（默认列间距），nogutter（无列间距），gutter-s（稍小的列间距）, gutter-x（稍大的列间距），gutter-xx（更大的列间距）这五种列间距模式，也可根据需要订制。

### 类序列：

`.grid-container` 或 `.grid-container-full` > `.grid-row` > `.grid .w-10-3`

## 类

### 1. grid-container 及 grid-container
### 2. grid-row
### 3. grid
### 4. w-总列数-列数
### 5. push-总列数-列数
### 6. pull-总列数-列数
### 7. offset-总列数-列数

## 代码示例

### 1.基本代码

```html
  <div class="grid-container">
    <!-- 1/2 + 1/2 布局 -->
    <div class="grid-row">
      <div class="grid w-2-1">...</div>
      <div class="grid w-2-1">...</div>
    </div>
	<!-- 1/3 + 1/3 + 1/3 布局 -->
    <div class="grid-row">
      <div class="grid w-3-1">...</div>
      <div class="grid w-3-1">...</div>
      <div class="grid w-3-1">...</div>
    </div>
	<!-- 100% 布局 -->
    <div class="grid-row">
      <div class="grid">...</div>
    </div>
  </div>
```

### 2.设置列间距(Gutter)

```html
  <div class="grid-container gutter-xx">
     ...
  </div>
```

### 3. 设置等高列（match-height）

3.1 如果设置在grid-container上，grid-container内的所有的grid均为等高列：

```html
  <div class="grid-container match-height">
     ...
  </div>
```

3.2 如果设置在grid-row上，grid-row内所有的grid均为等高列：

```html
<div class="grid-container">
  <div class="grid-row">
  </div>
  <div class="grid-row match-height"><!-- 本行的grid为等高列 -->
    <div class="grid"></div>
    <div class="grid"></div>
    <div class="grid"></div>
  </div>
  <div class="grid-row">
  </div>
</div>
```
