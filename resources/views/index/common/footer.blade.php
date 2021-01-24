<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
        @foreach($links as $link)
          <div class="col-6 col-md-3">
            <ul class="list-unstyled mb-0">
              <li><a target="_blank" href="{{ $link->url }}">{{ $link->title }}</a></li>
            </ul>
          </div>
          @endforeach
          <div class="col-6 col-md-3">
            <ul class="list-unstyled mb-0">
              <li><a href="{{ url('/links') }}">更多……</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
      {{ $sys_info->web_desc }}
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <div class="row align-items-center flex-row-reverse">
      <div class="col-auto ml-lg-auto">
        <div class="row align-items-center">
          <div class="col-auto">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                  <a href="{{ url('/shoulu') }}">申请收录</a>
              </li>
              <li class="list-inline-item">
                  <a target="_blank" href="https://github.com/kothing/SiteCMS/blob/master/LICENSE">使用协议</a>
              </li>
              <!-- 统计代码 -->
              <li class="list-inline-item">{!! $sys_info->tongji !!}</li>
              <!-- 统计代码 -->
            </ul>
          </div>
          <div class="col-auto">
            <!-- <a href="https://www.kothing.com" class="btn btn-outline-primary btn-sm">版权所有</a> -->
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
        Copyright © 2020 <a href="https://www.kothing.com">Kothing</a>. Design by <a href="https://github.com/kothing/SiteCMS" target="_blank">SiteCMS</a> All rights reserved.
      </div>
    </div>
  </div>
</footer>

<!-- Search fixed-->
<script type="text/javascript">
    function getTop(element) {
        let realTop = element.offsetTop;
        let parent = element.offsetParent;
        while (parent !== null) {
            realTop += parent.offsetTop;
            parent = parent.offsetParent;
        }
        return realTop;
    }
    let search_form = document.getElementById("search-form");
    let titleTop = getTop(search_form);
    document.onscroll = function(){
        let btop = document.body.scrollTop || document.documentElement.scrollTop;
        if(btop > titleTop){
            search_form.className = "clearfix fixed-search";
        } else {
            search_form.className = "flex-grow-1";
        }
    }
</script>

<!-- 手机设备，隐藏热门榜单 -->
<script>
    if(window.screen.width < 700){
        document.getElementById('remen').style.display = 'none';
    }
</script>

<!--jQuery-->
<script src="https://cdn.staticfile.org/jquery/2.2.3/jquery.min.js"></script>

<!-- 百度联想搜索 -->
<script charset="gbk" src="http://www.baidu.com/js/opensug.js"></script>

<!-- 搜索方式 -->
<script type="text/javascript">
    function onSearch(value){
        if(value === 1){ //百度
            $('#form-action').attr('action','https://wwww.baidu.com/s');
            $('#search-input').attr('name','word');
            $('#current-search').text('百度');
        }
        if(value === 2){ //百度
            $('#form-action').attr('action','https://www.google.com/search');
            $('#search-input').attr('name','word');
            $('#current-search').text('谷歌');
        }
        else if(value === 3){ //必应
            $('#form-action').attr('action','https://cn.bing.com/search');
            $('#search-input').attr('name','q');
            $('#current-search').text('必应');
        }
        else if(value === 4){ //搜狗
            $('#form-action').attr('action','https://www.sogou.com/web');
            $('#search-input').attr('name','query');
            $('#current-search').text('搜狗');
        }
        else if(value === 5){ //dogedoge
            $('#form-action').attr('action','https://www.dogedoge.com/results');
            $('#search-input').attr('name','q');
            $('#current-search').text('Dogedoge');
        }
    };
</script>
      
