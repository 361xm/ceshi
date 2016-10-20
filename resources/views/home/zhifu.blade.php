@extends("home.base.base1")
@section('content')
  <link href="{{ asset('home/dingdancss/css/public.css')}}" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('home/dingdancss/css/base.css')}}"/>
  <script type="text/javascript" src="{{ asset('home/dingdancss/js/jquery_cart.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('home/dingdancss/css/buyConfirm.css')}}" />
  <script src="{{ asset('home/dingdan/css/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('home/dingdan/css/js/unslider.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('home/dingdan/css/js/index.js')}}" type="text/javascript"></script>
   <form  target="_blank" action="#" id="pay-form" method="post">
            <div class="order-info">
                <div class="msg">
                    <h3>您的订单已提交成功！付款咯～</h3>
                    <p></p>
                    
                                                                    <p class="post-date">成功付款后，7天发货</p>
                                    </div>
                <div class="info">
                    <p>
                        金额：<span class="pay-total">{{$list->goodsprice}}</span>
                    </p>
                    <p>
                        订单：<?php echo time() ;?>                    </p>
                    <p>
                        配送：{{ $data->username }}                                    <span class="line">/</span>
                                    {{ $data->phone }}                                    <span class="line">/</span>
                                    {{$data->area}}                                                                <span class="line">/</span>
                                                                    不限送货时间                                    <span class="line">/</span>
                                    个人电子发票                                                    </p>
                </div>
                <div class="icon-box">
                    <i class="iconfont"><img src="{{ asset('home/dingdancss/images/yes_ok.png')}}"></i>
                </div>
            </div>
        </form>
@endsection
