@extends('index.common.top')
@section('title',$sys_info->web_title)
@section('content')

    <div class="container">
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

@endsection
