# 百分比布局

### 特点：

* 自由度比网格布局高，代价是css中有些宽度可能永远都用不上。
* 没有网格布局中的gutter机制，要达到gutter的效果需要创建一个列，但是很容易搞定。
* 提供了push,pull,offset。

### 类序列：

`.container` 或 `.container-full` > `.row` > `.col .w-34`

## 代码示例

### 1.基本代码

```html
  <div class="container">
    <!-- 50% + 50% 布局 -->
    <div class="row">
      <div class="col w-50">...</div>
      <div class="col w-50">...</div>
    </div>
	<!-- 30% + 40% + 30% 布局 -->
    <div class="row">
      <div class="col w-30">...</div>
      <div class="col w-40">...</div>
	  <div class="col w-30">...</div>
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