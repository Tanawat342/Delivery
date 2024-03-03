<x-template.layout title="{{ $title }}" >
  <x-organisms.navbar :path="$shop->path"/>
    <div class="container py-y d-flex flex-column align-items-center gap-3">
      <img src="{{ asset('client/img/success-order.png') }}" class="border rounded rounded-3" style="width:40%;height:auto;">
      <div class="text-center">
        <h4>ขอบคุณสำหรับการสั่งซื้อ</h4>
        <p>Order Code : <u><b class="text-danger">{{ $order_code }}</b></u></p>
        <p>คุณสามารถติดตามคำสั่งซื้อของคุณได้เสมอที่ <a href="{{ route('clientCheckOrder') }}"><u>Check Order</u></a>, กรุณาเก็บและอย่าลืมรหัสนี้สำหรับตรวจสอบสถานะการสั่งซื้อ</p>
      </div>
      <a href="{{ route('clientCheckOrder') }}" class="btn btn-primary">ตรวจสอบคำสั่งซื้อเลย</a>
    </div>
  <x-organisms.footer :shop="$shop"/>
</x-template.layout>