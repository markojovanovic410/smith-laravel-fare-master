@extends('common.web.layout.base')
@section('content')

<div class="container" style="margin-top: 50px;">
  @foreach(Helper::getcmspage() as $k=>$v)
    @if($v->page_name == $type )
      {!!$v->content !!} 
    @endif
  @endforeach
</div>

@endsection
