@extends('admin/html.PCbase')


  @section('title','メニュー一覧')
@php
    use App\Models\CategoryTable;
    use Illuminate\Support\Facades\Auth;
@endphp
  <!--テキストサンプル-->
  @section('contents')
<h2>商品一覧</h2>
{{csrf_field()}}
{{ Form::open(['action' => 'MenuCreateController@create', 'method' => 'post']) }}
{{ Form::select('FORM_NAME', CategoryTable::where('StoreID',Auth::id())->select('CategoryID', 'Category')->get()->pluck('Category','CategoryID')->prepend( "全て", "0"), null, ['class' => 'form-control']) }}
{!! Form::submit('検索') !!}
{{ Form::close() }}
@foreach ($Menu as $item)
<div class="MenuCreate">
    <!--ここのURLにクエリパラメータで商品IDを送る-->
    <a href="#">
        <img src="{{ asset('images/men1.jpg') }}">

        <div class="Create-Name">

          <div class="Menucheckbox">
              <input type="checkbox" id="Menubox"><!--データベースの数値-->
              <label for="Menubox" class="Menu-btn"><span></span></label>

                <div class="Menu-abc">
                  <ul>
                    <li><a href="/admin/login">変更</a></li>
                    <li><input type="submit"  value="削除"></li>
                    <li><a href="#">販売中止</a></li>
                    </form>
                  </ul>

                </div>

          </div>
          

          

        
          <p>{{$item->CommodityName}}</p>
          
          <div class="Create-Price">
            <p>{{$item->Price}}円</p>
          </div>

        </div>   
    </a>
</div>
@endforeach
    <!--/テキストサンプル-->
  @endsection
