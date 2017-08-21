<form method="POST" action="{{route('cart.store')}}">
    {{ csrf_field() }}
    <input type="hidden" name="itemId" value="{{$id}}">
    <input type="hidden" name="userEmail" value="">
    <button href="#" class="add-to-cart btn btn-md btn-success">
        <span><b>Į krepšelį</b></span>
        <i class="fa fa-cart-plus" aria-hidden="true"></i>
    </button>
</form>