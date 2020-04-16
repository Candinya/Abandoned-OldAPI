<header>
  <title>上古版本のAPI服务器</title>
</header>
<body>
  <div style="text-align:center">
    <h1> 这里是一个上古版本的辣鸡API服务器. </h1>
  </div>
  <hr />
  <div>
    <h3>bingpic</h3>
    <p>用法：https://old-api.lcy.moe?api=bingpic</p>
    <p>返回：今日的bing背景图片</p>
    <p>样例：<a href="https://old-api.lcy.moe?api=bingpic" target="_blank">https://old-api.lcy.moe?api=bingpic</a></p>
  </div>
  <hr />
  <div>
    <h3>qr</h3>
   <p>用法：https://old-api.lcy.moe?api=qr&cont=你要传入的参数，例如网页URL，<strong>注意URL转义</strong></p>
   <p>返回：图片数据</p>
   <p>样例：<a href="https://old-api.lcy.moe?api=qr&cont=It%20worked" target="_blank">https://old-api.lcy.moe?api=qr&cont=It%20worked</a></p>
  </div>
  <hr />
  <div>
    <h3>Gravatar</h3>
   <p>用法：https://old-api.lcy.moe?api=gravatar&email=要获取头像的邮箱地址，例如Email@example.com</p>
   <p>返回：图片地址数据（可以把这个扔在img的src里）</p>
   <p>如果传参时传入nohead == true，则仅返回后面那一串哈希值</p>
  </div>
  <hr />
  <div>
    <h3>网易云音乐（不保证可用性）</h3>
   <p>用法：https://old-api.lcy.moe?api=nemusic&id=歌曲的ID，例如468490592</p>
   <p>返回：音乐文件（可以把这个扔在播放器的url里）</p>
   <p>样例：<a href="https://old-api.lcy.moe?api=nemusic&id=468490592" target="_blank">https://old-api.lcy.moe?api=nemusic&id=468490592</a></p>
  </div>
</body>