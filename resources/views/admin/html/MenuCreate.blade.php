@extends('admin/html.PCbase')

<path xmlns="http://www.w3.org/2000/svg" class="st0" d="M426.093,0c-9.344,0-17.502,6.318-19.838,15.363l-20.277,78.574H28.775c-6.434,0-12.496,3.025-16.363,8.166   c-3.867,5.144-5.096,11.805-3.316,17.994l58.826,204.123c2.526,8.771,10.557,14.814,19.682,14.814H322.73l-8.858,34.324H89.396   v36.133h236.594c9.342,0,17.5-6.324,19.836-15.373l92.383-357.988h65.496V0H426.093z M349.925,233.652l-17.871,69.25h-45.133   v-69.25H349.925z M376.653,130.068l-17.406,67.453h-72.326v-67.453H376.653z M250.79,233.652v69.25h-77.084v-69.25H250.79z    M250.79,130.068v67.453h-77.084v-67.453H250.79z M143.361,130.068v67.453H69.009l-19.436-67.453H143.361z M143.361,233.652v69.25   H99.374l-19.955-69.25H143.361z"/>
  @section('title','メニュー一覧')
@php
    use App\Models\CategoryTable;
    use Illuminate\Support\Facades\Auth;
@endphp
  <!--テキストサンプル-->
  @section('contents')
<div class="MenuCreate">
  <div class="AK">
    <h1>商品一覧</h1>

    <button><a href="/admin/NewProduct">新規追加</a></button>
  </div>
  <div class="search">
    {{csrf_field()}}
    {{ Form::open(['action' => 'MenuCreateController@create', 'method' => 'post']) }}
    {{ Form::select('FORM_NAME', CategoryTable::where('StoreID',Auth::id())->select('CategoryID', 'Category')->get()->pluck('Category','CategoryID')->prepend( "全て", "0"), null, ['class' => 'form-control']) }}
    {!! Form::submit('検索') !!}
    {{ Form::close() }}
  </div>

  <div class="field-Create">



    @foreach ($Menu as $item)
    <div class="MenuCreate-card">
        <!--ここのURLにクエリパラメータで商品IDを送る-->

        <img src="{{asset('storage/images/'.$item->img)}}">

        <div class="Create-Name">

          <div class="Menucheckbox">
              <input type="checkbox" id="Menubox{{$item->CommodityID}}"><!--データベースの数値-->
              <label for="Menubox{{$item->CommodityID}}" class="Menu-btn">
              </label>


                <div class="Menu-abc">
                  <ul>
                    <li>
                    <form action="{{route('admin.menudetail',['id'=>$item->CommodityID])}}" method="post">
                        @csrf
                    <button>変更</button>
                    </form>
                    </li>
                    <li><input type="submit"  value="削除"></li>
                    <li><form action="{{route('admin.stop',['id'=>$item->CommodityID])}}" method="post">
                        @csrf
                    <button>販売中止</button>
                    </form></li>
                  </ul>

                </div>

          </div>


          <p>{{$item->CommodityName}}</p>

          <div class="Create-Price">
            <p>{{$item->Price}}円</p>
          </div>

        </div>

    </div>

    @endforeach


  </div>

</div>

    <!--/テキストサンプル-->
  @endsection
