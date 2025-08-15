<tr>
    <td class="text-lg-center"><a href="{{ route("dashboard.users.show", ["user" => $wishlist->user->id]) }}">{{ $wishlist->user->name }}</a></td>
    <td class="text-lg-center"><a href="{{ route("dashboard.products.show", ["product" => $wishlist->product->id]) }}">{{ $wishlist->product->nameLang() }}</a></td>

</tr>


