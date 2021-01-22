@extends('index.common.top')
@section('title',$sys_info->web_title)
@section('content')

    <div class="container">
        <!-- 搜索框 -->
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="search-form">
                            <form action="http://www.baidu.com/s" method="get" target="_blank" id="form-action">
                                <div class="input-group col-lg-8 col-md-10 m-auto">
                                    <div class="input-group-prepend">
                                        <button type="button" id="current-search" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-paw"></i> 百度
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start">
                                          <a class="dropdown-item" onclick="onSearch(1)"><i class="fa fa-paw"></i> 百度</a>
                                          <a class="dropdown-item" onclick="onSearch(2)"><i class="fa fa fa-google"></i> 谷歌</a>
                                          <a class="dropdown-item" onclick="onSearch(3)"><i class="fa fa-send"></i> 必应</a>
                                          <a class="dropdown-item" onclick="onSearch(4)"><i class="fa fa fa-scribd"></i> 搜狗</a>
                                          <a class="dropdown-item" onclick="onSearch(5)"><i class="fa fa-user-secret"></i> Dogedoge</a>
                                        </div>
                                    </div>
                                    <input type="text" name="word" baiduSug="2" class="form-control" id="search-input" placeholder="搜索"/>
                                    <span class="input-group-append">
                                        <button class="btn btn-primary" type="submit">搜索</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="weather-box text-center">
                            <iframe allowtransparency="true" frameborder="0" width="317" height="28" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=3&z=1&t=1&v=0&d=1&bd=0&k=&f=&ltf=009944&htf=cc0000&q=1&e=0&a=1&c=54511&w=317&h=28&align=left"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END搜索框 -->
    
        <div class="row row-cards row-deck">
            
            <!-- 用户自定义网址预留Start -->
            <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-outline table-vcenter text-nowrap card-table">
                      <tbody>
                        <tr>
                          @foreach($majors as $key=>$major)
                          @if($key<=5)
                          <td class="featured-card text-center">
                            <a class="d-inline-block" href="{{ $major->url}}" target="_blank" rel="nofollow">
                              <div class="avatar" style="background-image: url({{ asset('uploads') }}/{{$major->imgurl}})"></div>
                              <div><strong>{{ $major->title}}</strong></div>
                            </a>
                          </td>
                          @endif
                          @endforeach
                        </tr>
                        <tr>
                          @foreach($majors as $key=>$major)
                          @if($key>5 && $key<='11')
                          <td class="featured-card text-center">
                            <a class="d-inline-block" href="{{ $major->url}}" target="_blank" rel="nofollow">
                              <div class="avatar" style="background-image: url({{ asset('uploads') }}/{{$major->imgurl}})"></div>
                              <div><strong>{{ $major->title}}</strong></div>
                            </a>
                          </td>
                          @endif
                          @endforeach
                        </tr>
                        <tr>
                          @foreach($majors as $key=>$major)
                          @if($key>11)
                          <td class="featured-card text-center">
                            <a class="d-inline-block" href="{{ $major->url}}" target="_blank" rel="nofollow">
                              <div class="avatar" style="background-image: url({{ asset('uploads') }}/{{$major->imgurl}})"></div>
                              <div><strong>{{ $major->title}}</strong></div>
                            </a>
                          </td>
                          @endif
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            <!-- 用户自定义网址预留END -->
                
            <div class="col-lg-3" id="remen">
                <!-- 广告位功能后续将扩展到管理后台控制 -->
                <div class="card">
                    <img src="https://kothing.github.io/assets/images/hello-world.png">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">精选推荐</h4>
                    </div>
                    <table class="table card-table">
                      <tbody>
                        @foreach($main_article as $ma)
                         <tr>
                          <td width="1"><i class="fe fe-thumbs-up text-muted"></i></td>
                          <td>
                            <a class="text-body" href="{{ url('article/info') }}/{{$ma->id}}" target="_blank">{{ Str::limit($ma->title,20,'…') }}</a>
                          </td>
                          <!-- <td class="text-right"><span class="text-muted">[阅读:{{ $ma->views }}]</span></td> -->
                         </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
        
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">热门点击</h4>
                  </div>
                  <table class="table card-table">
                    <tbody>
                    @foreach($hot_article as $ha)
                    <tr>
                      <td width="1"><i class="fa fa-h-square text-muted"></i></td>
                      <td><a class="text-body" href="{{ url('article/info') }}/{{$ha->id}}">{{ Str::limit($ha->title,20,'…')}}</a></td>
                    <!-- <td class="text-right"><span class="text-muted">[阅读:{{ $ha->views }}]</span></td> -->
                    </tr>@endforeach
                  </tbody>
                  </table>
                </div>
            </div>
                
            <div class="col-lg-9">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <tbody>
                      @foreach($navigations as $navigation)
                        <tr>
                          <td>
                            <span class="text-success">
                              <a style="color:green" href="{{ url('/urls') }}/{{ $navigation->id }}">[{{$navigation->name}}]</a>
                            </span>
                          </td>
                          @foreach(\App\Model\NavigationCategory::find($navigation->id)->navigation->where('status',1)->take(6) as $url)
                          <td><a href="{{$url->url}}" class="text-body" target="_blank" rel="nofollow">{{$url->title}}</a></td>
                          @endforeach
                          <td><a href="{{ url('/urls') }}/{{ $navigation->id }}" target="_blank" class="text-success">更多...</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
        
    </div> 
</div>

<!-- 手机设备，隐藏热门榜单 -->
<script>
    if(window.screen.width < 700){
        document.getElementById('remen').style.display = 'none';
    }
</script>

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
    let rect = search_form.getBoundingClientRect();
    let insert = document.createElement("div");
    search_form.parentNode.replaceChild(insert, search_form);
    insert.appendChild(search_form);
    insert.style.height = rect.height + "px";
    let titleTop = getTop(search_form);
    document.onscroll = function(){
        let btop = document.body.scrollTop || document.documentElement.scrollTop;
        if(btop > titleTop){
            search_form.className = "clearfix fixed-search";
        } else {
            search_form.className = "clearfix";
        }
    }
</script>

<!--jQuery-->
<script src="https://cdn.staticfile.org/jquery/2.2.3/jquery.min.js"></script>

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

<!-- 百度联想搜索 -->
<script charset="gbk" src="http://www.baidu.com/js/opensug.js"></script>
@endsection
