@extends('admin/html.PCbase')


  @section('title','メニュー一覧')
@php
    use App\Models\CategoryTable;
    use Illuminate\Support\Facades\Auth;
    $categorys=CategoryTable::where('StoreID',Auth::id())->select('CategoryID', 'Category')->get();
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
                    <li><form action=/admin/MenuDelete/delete method="post">
                      @csrf<input type="submit"  value="削除"></form></li>
                    <li><form action="{{route('admin.stop',['id'=>$item->CommodityID])}}" method="post">
                      @csrf
                    
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
